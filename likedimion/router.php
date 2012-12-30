<?php
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 19:31
 */

if(isset($_GET["do"]))
{
    /** @var $crypter \MB\Crypt */
    $crypter = \MB\Container::get("crypter");
    $do = str_replace(array(":", "_", "."), array("/" , "/", "/"), $_GET["do"]);
    $action = dirname(__FILE__)."/actions/".strtolower($do).".php";
    if(file_exists($action)){
        include_once $action;
    } else {
        MB\View::make("errors/404.tpl");
    }
}
