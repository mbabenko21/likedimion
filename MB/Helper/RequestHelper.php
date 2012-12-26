<?php
namespace MB\Helper;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:16
 */
class RequestHelper
{
    /**
     * @param string $param
     * @param null $default
     * @return mixed
     */
    public static function get($param, $default = null){
        return (isset($_GET[$param])) ? $_GET[$param] : $default;
    }

    /**
     * @static
     * @param string $param
     * @param null $default
     * @return mixed
     */
    public static function post($param, $default = null)
    {
        return (isset($_POST[$param])) ? $_POST[$param] : $default;
    }

    public static function redirect($url){
        header("Location: ".$url);
    }
}
