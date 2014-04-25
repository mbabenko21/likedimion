<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 18:55
 */

namespace MB\Services;


use MB\Common\RouterService;
use MB\Exception\RouteException;
use MB\Helper\Route;
use MB\Loader\Providers\RoutesYamlLoader;

class RouterServiceImpl implements RouterService {
    /** @var  RoutesYamlLoader */
    protected $loader;

    public function getUrl($routeID)
    {
        $data = $this->loader->get();
        if(isset($data[$routeID])){
            return new Route($data[$routeID], $routeID);
        } else {
            throw new RouteException("Route ".$routeID." not found");
        }
    }

    /**
     * @param \MB\Loader\Providers\RoutesYamlLoader $loader
     */
    public function setLoader($loader)
    {
        $this->loader = $loader;
        $this->loader->load();
    }
}