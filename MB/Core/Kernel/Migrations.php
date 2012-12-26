<?php
namespace MB\Core\Kernel;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:48
 */
use MB\Loader\Providers\YamlLoader;

class Migrations
{
    public static function init()
    {
        $classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL\Migrations', ROOT_DIR . "/vendor/doctrine/lib/Doctrine/DBAL/Migrations");
        $classLoader->register();
    }
}
