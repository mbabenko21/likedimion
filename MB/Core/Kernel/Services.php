<?php
namespace MB\Core\Kernel;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 9:39
 */
use MB\Loader\Providers\YamlLoader;
use MB\Configuration;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use MB\Loader\Providers\ServiceLoader;
use MB\Container;

class Services
{
    /**
     * @static
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $builder
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    public static function createServices(ContainerBuilder $builder)
    {
        $loader = new YamlLoader(ROOT_DIR . "/Resources/config/services.yml");
        $serviceConfiguration = new Configuration($loader);
        return self::init($builder, $serviceConfiguration);
    }

    /**
     * @static
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $builder
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    public static function createListeners(ContainerBuilder $builder)
    {
        $loader = new YamlLoader(ROOT_DIR . "/Resources/config/listeners.yml");
        $serviceConfiguration = new Configuration($loader);
        return self::init($builder, $serviceConfiguration);
    }

    /**
     * @static
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $builder
     * @param \MB\Configuration $serviceConfiguration
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    protected static function init(ContainerBuilder $builder, Configuration $serviceConfiguration)
    {
        foreach ($serviceConfiguration->getConfiguration() as $key => $config) {
            $serviceLoader = new ServiceLoader($config, $key);
            $arguments = $serviceLoader->getArguments();
            $autoCalls = $serviceLoader->getAutoCalls();
            $class = $serviceLoader->getInstance();
            $provider = $serviceLoader->getProvider();
            $prop = $serviceLoader->getProperties();
            $service = $builder->register($provider, $class);
            if (!is_null($arguments)) {
                foreach ($arguments as $argument) {
                    $service->addArgument(self::resolve($argument));
                }
            }
            if (!is_null($autoCalls)) {
                foreach ($autoCalls as $method => $parameters) {
                    $service->addMethodCall($method, self::resolveParameters($parameters));
                }
            }

            if (!is_null($prop)) {
                foreach ($prop as $pKey => $property) {
                    $service->setProperty($pKey, self::resolve($property));
                }
            }
        }
        return $builder;
    }

    protected static function resolve($id)
    {
        $appConfig = Container::instance("app_config")->getConfiguration();
        if (substr($id, 0, 1) == "@") {
            $id = new Reference(substr($id, 1));
        }
        if (substr($id, 0, 3) == '$EN') {
            $id = str_replace('$EN', $appConfig["map"]["entity"], $id);
        }

        if (substr($id, 0, 3) == '$RES') {
            $id = str_replace('$RES', ROOT_DIR . "/Resources", $id);
        }
        return $id;
    }

    protected static function resolveParameters(array $parameters)
    {
        $key = 0;
        while ($key < count($parameters)) {
            $parameters[$key] = self::resolve($parameters[$key]);
            $key++;
        }
        return $parameters;
    }

}
