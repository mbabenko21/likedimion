<?php
namespace MB\Loader\Providers;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 15:45
 */
class NpcYamlLoader extends YamlLoader
{
    public function __construct()
    {

    }

    public function load($npc){
        $locale = \MB\Container::get("app_config")->getLocale();
        $file = $this->getBaseFolder() . "/npc/".strtolower($npc).".yml";
        parent::load($file);
    }
}
