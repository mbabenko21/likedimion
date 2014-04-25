<?php
namespace MB\Glor\Locations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 19:18
 */

use MB\I\LocationInterface;
use MB\Locations\Location;
use MB\Exception\LocationException;
use MB\Locations\Door;
use MB\I\DoorInterface;
use MB\Glor\AbstractAutoIncrementObject;

/**
 * @Entity
 * @Table(name="locations")
 */
class LocationDB implements LocationInterface
{
    /**
     * @var string
     * @Column(name="loc_id", type="string", unique=true)
     * @Id
     */
    protected $id;
    /**
     * @var string
     * @Column(type="string", name="name")
     */
    protected $name;
    /**
     * @var string
     * @Column(name="part", type="string")
     */
    protected $part;
    /**
     * @var string
     * @Column(type="text")
     */
    protected $info;
    /**
     * @var int
     * @Column(type="smallint", length=1)
     */
    protected $territory;
    /**
     * @var array
     * @Column(type="array")
     */
    protected $doors;


    /**
     * @return array
     */
    public function export()
    {
        return array();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return int
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * @return array
     */
    public function getDoors()
    {
        $doors = array();
        foreach($this->doors as $door){
            $doors[] = $this->getDoor($door[1]);
        }
        return $doors;
    }

    /**
     *
     * @param string $targetLoc
     * @return DoorInterface
     * @throws \MB\Exception\LocationException
     */
    public function getDoor($targetLoc)
    {
        foreach($this->doors as $door){
            if($door[1] == $targetLoc){
                return new Door($door);
            }
        }
        throw new LocationException("Door {$targetLoc} not found");
    }

    /**
     * @param DoorInterface $door
     * @internal param \MB\I\DoorInterface $targetDoor
     * @return void
     */
    public function addDoor(DoorInterface $door)
    {
        foreach($this->doors as $door){
            $this->doors[] = $door->export();
        }
    }

    /**
     * @param DoorInterface $door
     * @return bool
     */
    public function dropDoor(DoorInterface $door)
    {
        foreach($this->doors as $key => $iDoor){
            if($iDoor[1] = $door->getTargetLocation()){
                unset($this->doors[$key]);
                return true;
            }
        }
        return false;
    }


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $part
     */
    public function setPart($part)
    {
        $this->part = $part;
    }

    /**
     * @param string $info
     */
    public function setInfo($info)
    {
        $this->info = $info;
    }

    /**
     * @param int $territory
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;
    }

    /**
     * @param array $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * @return NpcList
     */
    public function getStaticNpcList()
    {
        /** @var $loader \MB\I\LoaderInterface */
        $loader = \MB\Container::get("location_loader");
        $loader->load($this->getId());
        $location = new Location($loader->get());
        return $location->getStaticNpcList();
    }

    public function __toString(){
        return $this->getName();
    }
}
