<?php
namespace MB;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:35
 */
class View
{
    public static function make($file, $data = array())
    {
        static::configure();
        /** @var $smarty \Smarty */
        $smarty = Container::instance("di")->get("smarty");
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = Container::instance("app_config");
        $glor = array(
            "css" => ROOT_DIR . "/css",
            "root" => ROOT_DIR,
            "author" => $appConfig->getAuthor(),
            "app_name" => $appConfig->getAppName(),
            "version" => $appConfig->getVersion(),
        );
        $start = microtime(true);
        $smarty->assign('app', $glor);
        $smarty->assign('view', $data);
        $smarty->display($file);
    }

    protected static function configure()
    {
        if (strtok(getenv("HTTP_USER_AGENT"), "/") == "Mozilla") {
            header("Content-type: text/html; charset=utf-8");
        } //Иначе если Опера или любой мобильный браузер то страница определяется как XHTML приложение (страница)
        else {
            header("Content-type:application/xhtml+xml; charset=utf-8");
        }
    }
}
