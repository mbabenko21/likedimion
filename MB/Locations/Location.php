<?php
namespace MB\Locations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 16:49
 */
use MB\I\LocationInterface;
use MB\Exception\NpcListException;
use MB\Glor\Locations\NpcList;
use MB\Exception\LocationException;
use MB\I\DoorInterface;
use MB\Glor\Params\AbstractList;


class Location extends AbstractList implements LocationInterface
{
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
        foreach ($this->doors as $door) {
            $doors[] = new Door($door);
        }
        return $doors;
    }

    /**
     * @param $targetLoc
     * @return Door
     * @throws \MB\Exception\LocationException
     */
    public function getDoor($targetLoc)
    {
        foreach ($this->params["doors"] as $door) {
            if ($door[1] == $targetLoc) {
                return new Door($door);
            }
        }
        throw new LocationException("Door {$targetLoc} not found");
    }

    /**
     * @param DoorInterface $door
     * @return void
     */
    public function addDoor(DoorInterface $door)
    {
        $this->params["doors"][] = array(
            $door->getName(),
            $door->getTargetLocation()
        );
    }

    /**
     * @param DoorInterface $door
     * @return void
     */
    public function dropDoor(DoorInterface $door)
    {
        foreach ($this->params["doors"] as $key => $d) {
            if ($d[1] == $door->getTargetLocation()) {
                unset($this->params["doors"][$key]);
            }
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @throws \MB\Exception\NpcListException
     * @return NpcList
     */
    public function getStaticNpcList()
    {
        /** @var $npcService \MB\Common\NpcService */
        $npcService = \MB\Container::get("npc_service");
        $npcList = new NpcList();
        if (is_array($this->npc)) {
            foreach ($this->npc as $key => $npc) {
                $addNpc = $npcService->getNpc($npc["npc"]);
                if(is_array($npc["respawn"]) and is_array($npc["move"])){
                    $addNpc->respawn = $npc["respawn"];
                    $addNpc->move = $npc["move"];
                    $addNpc->setId($key);
                    $npcList->add($addNpc);
                } else {
                    throw new NpcListException("Respawn or move parameter ca not be empty in {$this->getId()}");
                }
            }
        }
        return $npcList;
    }
}
