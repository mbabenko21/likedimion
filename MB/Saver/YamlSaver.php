<?php
namespace MB\Saver;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 17:07
 */
use MB\I\SaverInterface;
use MB\I\LoaderInterface;

class YamlSaver extends FileSaver implements SaverInterface
{

    /**
     * Сохранение данных
     * @param LoaderInterface $loader
     * @return void
     */
    public function save(LoaderInterface $loader)
    {
        $dump = \Symfony\Component\Yaml\Yaml::dump($loader->get());
        $this->put($loader->getProvider(), $dump);
    }
}
