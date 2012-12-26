<?php
namespace MB;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:53
 * To change this template use File | Settings | File Templates.
 */
use MB\Loader\Providers\ItemYamlLoader;
use MB\Loader\Providers\ExpTableYamlLoader;

class Application
{
     public static function run()
     {
         $container = new \Symfony\Component\DependencyInjection\ContainerBuilder();
         $app = new \MB\Loader\Providers\YamlLoader(ROOT_DIR . "/Resources/config/application.yml");
         $appConfig = new \MB\Configurations\ApplicationConfiguration($app);
         \MB\Container::register("app_config", $appConfig);
         $container->set("app_config", $appConfig);
         $container = \MB\Core\Kernel\Doctrine::init($container);
         $container = \MB\Core\Kernel\SmartyService::init($container, false);
         $container = \MB\Core\Kernel\Services::init($container);
         $container->set("items_loader", new ItemYamlLoader());
         $container->set("exp_table", new ExpTableYamlLoader(ROOT_DIR."/Resources/config/exp_table.yml"));
         $crypter = new \MB\Crypt();
         $crypter->Mode = \MB\Crypt::MODE_HEX;
         $crypter->Key  = $appConfig->getAppKey();
         $container->set("crypter", $crypter);
         \MB\Container::register("di", $container);
         \MB\Lang::load($appConfig->getLocale());
         set_error_handler(array('MB\Core\Kernel\Errors', 'handler'), E_ERROR);
         set_exception_handler(array('MB\Core\Kernel\Errors', 'exceptions'));
     }
}
