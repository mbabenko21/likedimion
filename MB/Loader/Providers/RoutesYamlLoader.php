<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 18:52
 */

namespace MB\Loader\Providers;


class RoutesYamlLoader extends YamlLoader {
    public function __construct(){

    }

    public function load($routes = ""){
        $routes = ($routes == "") ? ROOT_DIR."/Resources/config/routes.yml" : $routes;
        parent::load($routes);
    }
} 