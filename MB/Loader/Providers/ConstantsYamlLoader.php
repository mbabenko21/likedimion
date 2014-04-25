<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 23:01
 */

namespace MB\Loader\Providers;


class ConstantsYamlLoader extends YamlLoader {
    public function __construct(){}
    public function load($file = ""){
        $file = ROOT_DIR . "/Resources/config/".$file.".yml";
        parent::load($file);
    }
} 