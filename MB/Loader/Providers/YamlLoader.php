<?php
namespace MB\Loader\Providers;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:13
 */
use MB\Spyc;
use MB\Loader\FileLoader;

class YamlLoader extends FileLoader
{

    public function __construct($file)
    {
        $this->load($file);
    }

    public function load($dataProvider)
    {
        parent::load($dataProvider);
        $yaml = Spyc::YAMLLoadString($this->get());
        $this->update($yaml);
    }

    /**
     * @return string
     */
    protected function getBaseFolder(){
        $locale = \MB\Container::get("app_config")->getLocale();
        return ROOT_DIR."/Resources/data/".$locale;
    }
}
