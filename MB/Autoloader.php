<?php
namespace MB;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:25
 */
class Autoloader
{
    public static function register()
    {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array(new self, 'autoload'));
    }

    public static function autoload($class)
    {
        if (substr($class, 0, 1) == '\\') $class = substr($class, 1);
        $file = dirname(__FILE__) . "/../" . str_replace(array("\\", "_"), "/", $class) . ".php";
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
