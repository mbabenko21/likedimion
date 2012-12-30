<?php
namespace MB\Npc;
/**
 * @property string $id
 * @property string $type
 * @property string $info
 * @property string $name
 * @property string $dialog
 * @property CharParams $charParams
 * @property BaseParams $baseParams
 * @property WarParams $warParams
 * @property WarSkills $warSkills
 * @property array $respawn
 * @property array $move
 * @property int $owner
 * @property int $follower
 * @property string $status
 * @property int $freeMoveSteps
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 15:53
 */
use MB\Glor\Params\AbstractList;
use MB\I\ExportableInterface;
use MB\Glor\Npc\AbstractNpc;
use MB\Glor\Params\WarSkills;
use MB\Glor\Params\WarParams;
use MB\Glor\Params\BaseParams;
use MB\Glor\Params\CharParams;
use MB\I\NpcInterface;

class Npc extends AbstractNpc implements NpcInterface
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
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getDialog()
    {
        return $this->dialog;
    }

    /**
     * @return \MB\Glor\Params\CharParams
     */
    public function getCharParams()
    {
        $array = $this->__get("charParams");
        if (!is_array($array)) {
            $array = array();
        }
        return new CharParams($array);
    }

    /**
     * @return \MB\Glor\Params\BaseParams
     */
    public function getBaseParams()
    {
        $array = $this->__get("baseParams");
        if (!is_array($array)) {
            $array = array();
        }
        return new BaseParams($array);
    }

    /**
     * @return \MB\Glor\Params\WarParams
     */
    public function getWarParams()
    {
        $array = $this->__get("warParams");
        if (!is_array($array)) {
            $array = array();
        }
        return new WarParams($array);
    }

    /**
     * @return \MB\Glor\Params\WarSkills
     */
    public function getWarSkills()
    {
        $array = $this->__get("warSkills");
        if (!is_array($array)) {
            $array = array();
        }
        return new WarSkills($array);
    }

    /** string */
    public function getId()
    {
        return $this->__get("id");
    }

    public function setId($id)
    {
        $this->__set("id", $id);
    }

    /**
     * @return array
     */
    public function getRespawn()
    {
        return $this->respawn;
    }

    /**
     * @return array
     */
    public function getMove()
    {
        return $this->move;
    }

    public function setBaseParams(ExportableInterface $baseParams)
    {
        $this->__set("baseParams", $baseParams->export());
    }

    public function setCharParams(ExportableInterface $charParams)
    {
        $this->__set("charParams", $charParams->export());
    }

    public function setWarParams(ExportableInterface $warParams)
    {
        $this->__set("warParams", $warParams->export());
    }

    public function setWarSkills(ExportableInterface $warSkills)
    {
        $this->__set("warSkills", $warSkills->export());
    }

    public function setItems(ExportableInterface $items)
    {
        $this->__set("items", $items->export());
    }

    /**
     * @return int
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return int
     */
    public function getFollower()
    {
        return $this->follower;
    }

    /**
     * @return mixed
     */
    public function getMoveLock()
    {
        if ($this->status == 0) {
            return false;
        }
        return true;
    }

    /**
     * @return int
     */
    public function getFreeMoveSteps()
    {
        return $this->__get("freeMoveSteps");
    }

    /**
     * @param int $freeMoveSteps
     */
    public function setFreeMoveSteps($freeMoveSteps)
    {
        $this->__set("freeMoveSteps", $freeMoveSteps);
    }
}
