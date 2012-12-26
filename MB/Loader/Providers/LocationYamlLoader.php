<?php
namespace MB\Loader\Providers;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 16:30
 */
use MB\Container;

class LocationYamlLoader extends YamlLoader
{
    public function __construct()
    {

    }

    public function load($location)
    {
        $location = preg_replace("/[_\.]/", "/", $location);
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = Container::get("app_config");
        $file = $this->getBaseFolder() . "/locations/".$location.".yml";
        parent::load($file);
    }
}
