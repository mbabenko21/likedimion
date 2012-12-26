<?php // login.php :: Handles logins and cookies.
require_once "bootstrap.php";
/** @var $authService \MB\Common\AuthService */
$authService = \MB\Container::get("auth_service");
$authService->logout();

$errors = array();
$errLang = \MB\Lang::section("errors");
/** @var $newsService \MB\Common\NewsService */
$newsService = \MB\Container::get("news_service");
try{
    $lastNews = $newsService->getLast();
} catch (\MB\Exception\NewsException $e){
    $lastNews = NULL;
}
if (isset($_POST["button_sign"])) {

    /** @var $user \MB\Glor\User */
    $user = $authService->login($_POST["login"], $_POST["pass"], ($_POST["rememberme"] == 'yes'));
    if ($user instanceof \MB\Glor\User) {
        /** @var $locService \MB\Common\LocationService */
        $locService = \MB\Container::get("locations_service");
        $char = $user->getChar();
        $locId = $char->getCharParams()->location;
        $charList = $locService->charListInstance($locId);
        if(false === $charList->exists($char)){
            $charList->add($char);
        }
        $locService->importLists($charList);
        header("Location: index.php");
    } else {
        $errors[] = $errLang["auth"]["invalid"];
    }
}
/** @var $appConfig \MB\Configurations\ApplicationConfiguration */
$appConfig = \MB\Container::instance("app_config");

$data = array(
    "online" => 0,
    "news" => $lastNews,
    "title" => $appConfig->getAppName(),
    "home" => true,
    "errors" => $errors
);
if (isset($_GET["reg_complete"])) {
    $loginPLang = \MB\Lang::section("login_page");
    $regComplete = sprintf($loginPLang["reg_complete"]);
    $data["reg_complete"] = $regComplete;
}



MB\View::make(
    "login/index.tpl",
    $data
);

?>