<?php
error_reporting(E_ALL);
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:12
 */
if (!defined("ROOT_DIR")) {
    define("ROOT_DIR", dirname(__FILE__));
}

require_once ROOT_DIR . "/vendor/doctrine/lib/Doctrine/ORM/Tools/Setup.php";
\Doctrine\ORM\Tools\Setup::registerAutoloadDirectory(dirname(__FILE__) . "/vendor/doctrine/lib");

require_once ROOT_DIR . "/MB/Autoloader.php";

use MB\Autoloader, MB\Application;
Autoloader::register();
Application::run();








