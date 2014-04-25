<?php
namespace MB\Core\Kernel;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:08
 */
use MB\Exception\RouteException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use MB\Helper\DateHelper;

class SmartyService
{
    public static function init(ContainerBuilder $container, $debug = true)
    {
        require_once ROOT_DIR . "/vendor/smarty/libs/SmartyBC.class.php";
        $appConfig = \MB\Container::instance("app_config")->getConfiguration();
        $map = $appConfig["map"]["smarty"];
        $smarty = new \SmartyBC();
        $smarty->template_dir = ROOT_DIR . "/" . $map["template_dir"];
        $smarty->compile_dir = ROOT_DIR . "/" . $map["compile_dir"];
        $smarty->config_dir = ROOT_DIR . "/" . $map["config_dir"];
        $smarty->cache_dir = ROOT_DIR . "/" . $map["cache_dir"];
        $smarty->debugging = $debug;
        $smarty = self::addFunctions($smarty);
        $container->set(
            "smarty", $smarty);
        return $container;
    }

    /**
     * @static
     * @param $params
     * @return string
     */
    public static function lang($params)
    {
        if (empty($params["sect"])) {
            return "";
        }
        if (empty($params["line"])) {
            return "";
        }
        $lang = \MB\Lang::section($params["sect"]);
        if (isset($lang[$params["line"]])) {
            return $lang[$params["line"]];
        } else {
            return $params["line"];
        }
    }

    public static function random($params)
    {
        if (!empty($params["min"]) and !empty($params["max"])) {
            return (string)rand($params["min"], $params["max"]);
        } else {
            return (string)rand(0, 99);
        }
    }

    public static function length($array)
    {
        if (is_array($array)) {
            return count($array);
        } else {
            return 0;
        }
    }

    public static function format_date($datetime)
    {
        return DateHelper::format($datetime, "%#d %b %Y");
    }

    public static function  encrypt($word)
    {
        $crypter = \MB\Container::get("crypter");
        return $crypter->encrypt($word);
    }

    public static function  decrypt($word)
    {
        $crypter = \MB\Container::get("crypter");
        return $crypter->decrypt($word);
    }

    public static function route($params)
    {
        $routeId = $params["id"];
        /** @var $routerService \MB\Common\RouterService */
        $routerService = \MB\Container::get("routes_service");
        try {
            $route = $routerService->getUrl($routeId)->getUrl($params);
        } catch(RouteException $e){
            $route = "main";
        }
        return $route;
    }


    protected static function addFunctions(\SmartyBC $smarty)
    {
        $smarty->register_function("lang", array('MB\Core\Kernel\SmartyService', "lang"));
        $smarty->register_function("randomize", array('MB\Core\Kernel\SmartyService', "random"));
        $smarty->register_function("route", array('MB\Core\Kernel\SmartyService', "route"));
        $smarty->register_modifier("length", array('MB\Core\Kernel\SmartyService', "length"));
        $smarty->register_modifier("strftime", array('MB\Core\Kernel\SmartyService', 'format_date'));
        $smarty->register_modifier("encrypt", array('MB\Core\Kernel\SmartyService', 'encrypt'));
        $smarty->register_modifier("decrypt", array('MB\Core\Kernel\SmartyService', 'decrypt'));
        return $smarty;
    }
}
