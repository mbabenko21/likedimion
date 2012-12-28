<?php
namespace MB\Loader\Providers;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 22:47
 */
use MB\ExpTable\Level;
use MB\I\ExpTableInterface;

class ExpTableYamlLoader extends YamlLoader implements ExpTableInterface
{
    /**
     * @param int $level
     * @return \MB\ExpTable\Level
     */
    public function getLevel($level)
    {
        $level = "level-".$level;
        $data = $this->get();
        $data = $data["expirience"];
        return new Level($data[$level]);
    }
}
