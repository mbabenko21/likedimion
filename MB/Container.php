<?php
namespace MB;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:57
 */
class Container
{
    protected static $services = array();

    /**
     * @static
     * @param $service
     * @param $object
     * @return void
     */
    public static function register($service, $object)
    {
        self::$services[self::serviceNameResolve($service)] = $object;
    }

    /**
     * @static
     * @param $service
     * @return mixed
     * @throws Exception\RuntimeException
     */
    public static function instance($service)
    {
        if (isset(self::$services[self::serviceNameResolve($service)])) {
            return self::$services[self::serviceNameResolve($service)];
        } else {
            throw new \MB\Exception\RuntimeException("Service {$service} not instanced");
        }
    }

    protected static function serviceNameResolve($serviceName)
    {
        $serviceName = strtolower($serviceName);
        $serviceName = str_replace(array("_", ":", ".", "_"), "", $serviceName);
        return $serviceName;
    }

    /**
     * @return \Symfony\Component\DependencyInjection\ContainerBuilder
     */
    public static function builder()
    {
        return self::instance("di");
    }

    /**
     * @static
     * @param string $service
     * @return object
     */
    public static function get($service)
    {
        return static::builder()->get($service);
    }
}
