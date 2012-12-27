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
use MB\I\EventsStorage;
use Symfony\Component\EventDispatcher\EventDispatcher;
use MB\Core\Kernel\Services;
use MB\Core\Kernel\SmartyService;
use MB\Core\Kernel\Doctrine;
use MB\Loader\Providers\YamlLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use MB\Loader\Providers\ExpTableYamlLoader;

class Application
{
    public static function run()
    {
        $container = new ContainerBuilder();
        $app = new YamlLoader(ROOT_DIR . "/Resources/config/application.yml");
        $appConfig = new \MB\Configurations\ApplicationConfiguration($app);
        Container::register("app_config", $appConfig);
        $container->set("app_config", $appConfig);
        $container = Doctrine::init($container);
        $container = SmartyService::init($container, false);
        $container = Services::createServices($container);
        $container = Services::createListeners($container);
        $container->set("items_loader", new ItemYamlLoader());
        $container->set("exp_table", new ExpTableYamlLoader(ROOT_DIR . "/Resources/config/exp_table.yml"));
        $crypter = new \MB\Crypt();
        $crypter->Mode = \MB\Crypt::MODE_HEX;
        $crypter->Key = $appConfig->getAppKey();
        $container->set("crypter", $crypter);
        $eventDispatcher = new EventDispatcher();
        $container->set("event_dispatcher", $eventDispatcher);
        Container::register("di", $container);
        Lang::load($appConfig->getLocale());
        self::registerListeners();
        set_error_handler(array('MB\Core\Kernel\Errors', 'handler'), E_ERROR);
        set_exception_handler(array('MB\Core\Kernel\Errors', 'exceptions'));
    }

    protected static function registerListeners()
    {
        /** @var $dispatcher EventDispatcher */
        $dispatcher = Container::get("event_dispatcher");
        $dispatcher->addListener(EventsStorage::MOVE, array(Container::get("move_listener"), 'onMove'));
    }
}
