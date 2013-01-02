<?php
require_once "bootstrap.php";
use MB\Glor\Params\ItemParams;
use MB\Helper\StrHelper;
use MB\Glor\Params\Equip;

$reg = \MB\Lang::section("registration");
$iamnotbot1 = rand(1, 9);
$iamnotbot2 = rand(1, 9);
$summa = $iamnotbot1 + $iamnotbot2;
/** @var $userService \MB\Common\UserService */
$userService = \MB\Container::instance("di")->get("user_service");
/** @var $charService \MB\Common\CharService */
$charService = \MB\Container::instance("di")->get("char_service");
if (rand(0, 100) <= 50) {
    $f = "plus";
    $otvet = $iamnotbot1 + $iamnotbot2;
} else {
    $f = "max";
    $otvet = $iamnotbot1 * $iamnotbot2;
}
$errors = array();
if (empty($_POST["reg_button"])) {


} else {
    $errLang = \MB\Lang::section("errors");
    $regLang = \MB\Lang::section("registration");
    $loginPLang = \MB\Lang::section("login_page");
    $login = StrHelper::utfBadstrip($_POST["login"]);
    $email = \MB\Helper\StrHelper::utfBadstrip($_POST["email"]);
    $charName = \MB\Helper\StrHelper::utfBadstrip($_POST["char_name"]);

    if (!preg_match("/^[a-z0-9_]+$/i", $login)) {
        $errors[] = $errLang["reg"]["login_not_valide"];
    }

    if (empty($_POST["password"])) {
        $errors[] = sprintf($errLang["form"]["empty"], $loginPLang["password"]);
    }

    if ($_POST["password"] != $_POST["password_repeat"]) {
        $errors[] = $errLang["reg"]["passwords_not_confirm"];
    }

    if (!preg_match("/^((?:(?:(?:\w[\.\-\+]?)*)\w)+)\@((?:(?:(?:\w[\.\-\+]?){0,62})\w)+)\.(\w{2,6})$/", $email)) {
        $errors[] = $errLang["reg"]["email_not_valide"];
    }
    $cn =  strtolower($charName);
    if (!preg_match("/[А-Яа-я]+/i", $cn, $matches)) {
        $errors[] = $errLang["reg"]["char_name_is_not_valide"];
    }
    if ($_POST["captcha"] != $_POST["otvet"]) {
        $errors[] = $errLang["reg"]["captcha"];
    }

    if (count($errors) < 1) {
        try {
            $userService->findByLogin($login);
            $userService->findByEmail($email);
            $errors[] = $errLang["reg"]["user_exists"];
        } catch (\Doctrine\ORM\EntityNotFoundException $e) {
            try {
                $charService->findByName($charName);
                $errors[] = $errLang["reg"]["char_exists"];
            } catch (\Doctrine\ORM\EntityNotFoundException $e) {
                $user = new MB\Glor\User();
                $user->setLogin($login);
                $user->setEmail($email);
                $user->setPassword($_POST["password"]);
                $userService->persist($user);
                $userService->commit();
                switch ($_POST["race"]) {
                    case "light":
                        switch ($_POST["class"]) {
                            case "war":
                                $class = MB\Glor\Char\AbstractChar::LightWarrior;
                                break;
                            case "heal":
                                $class = MB\Glor\Char\AbstractChar::LightHealer;
                                break;
                            case "sniper":
                                $class = MB\Glor\Char\AbstractChar::LightSniper;
                                break;
                        }
                        break;
                    case "dark":
                        switch ($_POST["class"]) {
                            case "war":
                                $class = MB\Glor\Char\AbstractChar::DarkWarrior;
                                break;
                            case "heal":
                                $class = MB\Glor\Char\AbstractChar::DarkHealer;
                                break;
                            case "sniper":
                                $class = MB\Glor\Char\AbstractChar::DarkSniper;
                                break;
                        }
                        break;
                }
                $char = $charService->getNewInstance($class);
                $char->setName($charName);
                $char->setUser($user);
                $char->setLevel(0);
                $char->setExp(0);
                $char->setStudyPoints(3);
                $baseParams = new \MB\Glor\Params\BaseParams();
                $baseParams->strenge = 1;
                $baseParams->dexterity = 2;
                $baseParams->intelligence = 1;
                $baseParams->regeneration = 1;
                $baseParams->meditation = 1;
                $baseParams->life = 1;
                $baseParams->energy = 1;
                $char->setBaseParams($baseParams);
                $charParams = new \MB\Glor\Params\CharParams();
                $charParams->location = "ld_begin";
                $charParams->timeLastAction = time();
                $charParams->isRider = false;
                $charParams->isGhost = false;
                $charParams->isCriminal = false;
                $charParams->studyPoints = 3;
                $char->setCharParams($charParams);
                $items = new ItemParams();
                $equip = new Equip();
                $equip->rightHand = "i_w_k_nov";
                $equip->head = "i_a_h_nov";
                $equip->body = "i_a_b_nov";
                $equip->gloves = "i_a_g_nov";
                $equip->shoes = "i_a_s_nov";
                $char->setEquip($equip);
                $items->i_m_money = 400;
                $char->setItems($items);
                $user->setChar($char);
                $userService->persist($user);
                $userService->commit();
                header("Location: login.php?reg_complete=1");
            }
        }
    }
}

MB\View::make("login/reg.html.tpl", array(
    "title" => $reg["title"],
    "first" => $iamnotbot1,
    "second" => $iamnotbot2,
    "func" => $f,
    "errors" => $errors,
    "otvet" => $otvet
));

?>