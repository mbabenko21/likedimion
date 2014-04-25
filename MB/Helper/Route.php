<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 18:58
 */

namespace MB\Helper;


use MB\Exception\RouteException;

class Route
{
    /**
     * @var array
     */
    protected $_data;
    /**
     * @var array
     */
    protected $_fields = array();
    /**
     * @var string
     */
    protected $id;

    /**
     * @param array $route
     * @param string $id
     */
    public function __construct(array $route, $id)
    {
        $this->_data = $route;
        $this->id = $id;
    }

    public function getUrl($fields = array())
    {
        $this->setFields($fields);
        if ($this->_data["url"]) {
            $url = $this->_data["url"];
            $url = StrHelper::replaceFormula($url);
            $url = StrHelper::replaceField($url, $this->_fields);
        } else {
            throw new RouteException("Url was not found in route ".$this->id);
        }
        return $url."&".mt_rand(0,1000);
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->_fields;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->_fields = $fields;
    }
} 