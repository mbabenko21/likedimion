<?php
namespace MB\Glor\Params;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 17:02
 * To change this template use File | Settings | File Templates.
 */
use Iterator;
use MB\I\ExportableInterface;


abstract class AbstractList implements ExportableInterface, Iterator
{
    /**
     * @var array
     */
    protected $params = array();

    protected $key = 0;

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

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     */
    public function current()
    {
        return current($this->params);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        return next($this->params);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->params);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        $key = key($this->params);
        return ($key !== NULL && $key !== FALSE);
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset($this->params);
    }
}
