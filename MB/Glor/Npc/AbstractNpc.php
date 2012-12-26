<?php
namespace MB\Glor\Npc;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 9:24
 */
use MB\I\ExportableInterface;
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
class AbstractNpc extends AbstractAutoIncrementObject
{
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
}
