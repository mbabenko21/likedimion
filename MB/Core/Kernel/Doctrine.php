<?php
namespace MB\Core\Kernel;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:36
 */
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Doctrine\ORM\Events;
use Doctrine\Common\EventManager;
use Doctrine\ORM\EntityManager;
use MB\Loader\Providers\YamlLoader;
use Doctrine\ORM\Configuration;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\ApcCache;
use MB\Container;
use MB\Spyc;

class Doctrine
{
    public static function init(ContainerBuilder $container)
    {
        $database = new YamlLoader(ROOT_DIR . "/Resources/config/database.yml");
        $dbConf = new \MB\Configuration($database);
        Container::register("database_config", $dbConf);
        $databaseConfig = $dbConf->getConfiguration();
        /** @var $appConfig \MB\Configuration */
        $appConfig = Container::instance("app_config");
        $appConfig = $appConfig->getConfiguration();
        if ($appConfig["mode"] == "dev") {
            $cache = new ArrayCache();
        } else {
            $cache = new ApcCache();
        }

        $config = new Configuration();
        $config->setMetadataCacheImpl($cache);
        foreach ($databaseConfig["entity_paths"] as $key => $path) {
            $databaseConfig["entity_paths"][$key] = str_replace("\$ROOT", ROOT_DIR, $path);
        }
        $driverImpl = $config->newDefaultAnnotationDriver($databaseConfig["entity_paths"]);
        $config->setMetadataDriverImpl($driverImpl);
        $config->setQueryCacheImpl($cache);
        $config->setProxyDir(str_replace("\$ROOT", ROOT_DIR, $databaseConfig["proxy"]));
        $config->setProxyNamespace('MB\Proxy\Entity');

        if ($appConfig["mode"] == "dev") {
            $config->setAutoGenerateProxyClasses(true);
        } else {
            $config->setAutoGenerateProxyClasses(false);
        }
        $evm = new EventManager();
        $prefix = new TablePrefix($databaseConfig["table_prefix"]);
        $evm->addEventListener(Events::loadClassMetadata, $prefix);

        $em = EntityManager::create($databaseConfig["database_params"], $config, $evm);
        $container->set("entityManager", $em);
        return $container;
    }
}
