<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 22.04.14
 * Time: 0:16
 */

namespace MB\Loader\Providers;


class SkillsYamlLoader extends YamlLoader {
    public function __construct(){}
    public  function load($school){
        $school = $this->getBaseFolder() ."/skills/". $school . ".yml";
        parent::load($school);
    }
} 