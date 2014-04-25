<?php
namespace MB\Glor\Npc;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 9:24
 */
use MB\Glor\Params\CoolDownParams;
use MB\Glor\Params\TalantsSkills;
use MB\I\ExportableInterface;
use MB\I\NpcInterface;
use MB\Items\ItemList;
use MB\Glor\Params\ItemParams;
use MB\Glor\AbstractAutoIncrementObject;
use MB\Glor\Params\ProffSkills;
use MB\Glor\Params\WarSkills;
use MB\Glor\Params\BaseParams;
use MB\Glor\Params\WarParams;
use MB\Glor\Params\CharParams;

/**
 * @MappedNpc
 */
class AbstractNpc extends AbstractAutoIncrementObject implements NpcInterface
{
    /**
     * @var string
     * @Column(type="string", length=32)
     */
    protected $name;
    /**
     * @var array
     * @Column(type="array", name="base_params")
     */
    protected $baseParams = array();
    /**
     * @var array
     * @Column(name="war_params", type="array")
     */
    protected $warParams = array();
    /**
     * @var array
     * @Column(name="char_params", type="array")
     */
    protected $charParams = array();

    /**
     * @var array
     * @Column(name="war_skills", type="array")
     */
    protected $warSkills = array();
    /**
     * @var array
     * @Column(name="items", type="array")
     */
    protected $items = array();

    /**
     * @var array
     * @Column(name="talants", type="array")
     */
    protected $talants = array();
    /**
     * @var array
     * @Column(name="cooldowns", type="array")
     */
    protected $cooldown = array();
    /**
     * @var int
     * @Column(name="sex", type="integer")
     */
    protected $sex = 1;


    /**
     * @return BaseParams
     */
    public function getBaseParams()
    {
        return new BaseParams($this->baseParams);
    }

    /**
     * @param \MB\I\ExportableInterface $baseParams
     * @return void
     */
    public function setBaseParams(ExportableInterface $baseParams)
    {
        $this->baseParams = $baseParams->export();
    }


    /**
     * @return WarParams
     */
    public function getWarParams()
    {
        $warParams = new WarParams($this->warParams);
        return $warParams;
    }

    /**
     * @param ExportableInterface $warParams
     */
    public function setWarParams(ExportableInterface $warParams)
    {
        $this->warParams = $warParams->export();
    }

    /**
     * @return CharParams
     */
    public function getCharParams()
    {
        return new CharParams($this->charParams);
    }

    /**
     * @param ExportableInterface $charParams
     */
    public function setCharParams(ExportableInterface $charParams)
    {
        $this->charParams = $charParams->export();
    }

    /**
     * @return \MB\Glor\Params\WarSkills
     */
    public function getWarSkills()
    {
        return new WarSkills($this->warSkills);
    }

    /**
     * @param ExportableInterface $warSkills
     */
    public function setWarSkills(ExportableInterface $warSkills)
    {
        $this->warSkills = $warSkills->export();
    }

    /**
     * @return ItemList
     */
    public function getItems()
    {
        return new ItemList($this->items);
    }

    /**
     * @param ExportableInterface $items
     */
    public function setItems(ExportableInterface $items)
    {
        $this->items = $items->export();
    }

    /**
     * @return TalantsSkills
     */
    public function getTalants()
    {
        return new TalantsSkills($this->talants);
    }

    /**
     * @param ExportableInterface $talants
     */
    public function setTalants(ExportableInterface $talants)
    {
        $this->talants = $talants->export();
    }

    /**
     * @param \MB\Glor\Params\CoolDownParams|\MB\I\ExportableInterface $cooldown
     */
    public function setCooldown(ExportableInterface $cooldown)
    {
        $this->cooldown = $cooldown->export();
    }

    /**
     * @return CoolDownParams
     */
    public function getCooldown()
    {
        if(is_null($this->cooldown)) {
            $this->cooldown = array();
        }
        return new CoolDownParams($this->cooldown);
    }

    /**
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        // TODO: Implement getInfo() method.
    }

    /**
     * @return string
     */
    public function getType()
    {
        // TODO: Implement getType() method.
    }

    /**
     * @return string
     */
    public function getDialog()
    {
        // TODO: Implement getDialog() method.
    }

    /**
     * @return array
     */
    public function getRespawn()
    {
        // TODO: Implement getRespawn() method.
    }

    /**
     * @return array
     */
    public function getMove()
    {
        // TODO: Implement getMove() method.
    }

    /**
     * @return int
     */
    public function getOwner()
    {
        // TODO: Implement getOwner() method.
    }

    /**
     * @return int
     */
    public function getFollower()
    {
        // TODO: Implement getFollower() method.
    }

    /**
     * @return bool
     */
    public function getMoveLock()
    {
        // TODO: Implement getMoveLock() method.
    }

    /**
     * @return int
     */
    public function getFreeMoveSteps()
    {
        // TODO: Implement getFreeMoveSteps() method.
    }
}
