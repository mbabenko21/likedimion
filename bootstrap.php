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

$loader = require ROOT_DIR . '/vendor/autoload.php';
$loader->add('DoctrineMigrations', __DIR__."/Resources/migrations/");

require_once ROOT_DIR . "/MB/Autoloader.php";

use MB\Autoloader, MB\Application;
Autoloader::register();
Application::run();








