<?php
namespace MB\Glor\Params;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 17:02
 * To change this template use File | Settings | File Templates.
 */
use MB\I\ExportableInterface;


abstract class AbstractList implements ExportableInterface
{
    /**
     * @var array
     */
    protected $params;

    public function __construct(array $params = array())
    {
        foreach ($params as $key => $param) {
            $this->__set($key, $param);
        }
    }

    public function __get($name)
    {
        return ($this->__isset($name)) ? $this->params[$this->formatName($name)] : 0;
    }

    public function __set($name, $value)
    {
        $this->params[$this->formatName($name)] = $value;
    }

    public function __isset($name)
    {
        $name = $this->formatName($name);
        $isset = isset($this->params[$name]);
        return $isset;
    }

    /**
     * @return array
     */
    public function export()
    {
        return $this->params;
    }

    private function formatName($name)
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', $name));
    }

    public function __unset($name)
    {
        unset($this->params[$name]);
    }

    public function getSum()
    {
        return array_sum($this->export());
    }

    public function count()
    {
        return count($this->params);
    }
}
