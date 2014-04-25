<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 18:54
 */

namespace MB\Common;


use MB\Helper\Route;

interface RouterService {
    /**
     * @param $routeID
     * @return Route
     */
    public function getUrl($routeID);
} 