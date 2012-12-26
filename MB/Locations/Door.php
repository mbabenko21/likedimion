<?php
namespace MB\Locations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 16:49
 */
use MB\I\DoorInterface;
use MB\I\ExportableInterface;

class Door implements DoorInterface, ExportableInterface
{
    /** @var array */
    protected $door;
    public function __construct(array $door)
    {
        $this->door = $door;
    }

    /**
     * @internal param $doorId
     * @return string
     */
    public function getName()
    {
        return $this->door[0];
    }

    /**
     * @return \MB\Locations\Location|void
     */
    public function getTargetLocation()
    {
        /** @var $locService \MB\Common\LocationService */
        $locService = \MB\Container::get("locations_service");
        return $this->door[1];
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->door[2];
    }

    /**
     * @return array
     */
    public function export()
    {
        return $this->door;
    }
}
