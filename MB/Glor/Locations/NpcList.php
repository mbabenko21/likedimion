<?php
namespace MB\Glor\Locations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 17:35
 */
use MB\Glor\AbstractAutoIncrementObject;
use MB\Npc\Npc;
use MB\I\NpcInterface;
use MB\I\ListInterface;
use MB\I\ExportableInterface;

/**
 * @Entity
 * @Table(name="npc_list")
 */
class NpcList extends AbstractAutoIncrementObject implements ListInterface
{
    /**
     * @var string
     * @Column(name="loc_id", type="string", unique=true)
     */
    protected $locId;
    /**
     * @var array
     * @Column(name="npc_list", type="array")
     */
    protected $npcList = array();

    /**
     * @return string
     */
    public function getLocId()
    {
        return $this->locId;
    }

    /**
     * @param string $locId
     */
    public function setLocId($locId)
    {
        $this->locId = $locId;
    }

    /**
     * @param \MB\I\NpcInterface|ExportableInterface $element
     * @return bool
     */
    public function add($element)
    {
        if ($element instanceof NpcInterface) {
            if (false === $this->exists($element)) {
                $this->npcList[] = $element->export();
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    /**
     * @param NpcInterface $element
     */
    public function refresh($element)
    {
        if($element instanceof NpcInterface){
            foreach($this->npcList as $key => $npc){
                $npc = new Npc($npc);
                if($npc->getId() == $element->getId()){
                    $exportable = $element->export();
                    $this->npcList[$key] = $exportable;
                }
            }
        }
    }

    /**
     * @param NpcInterface $element
     * @return bool
     */
    public function exists($element)
    {
        if ($element instanceof NpcInterface) {
            foreach ($this->npcList as $npc) {
                $npc = new Npc($npc);
                if ($npc->getId() == $element->getId()) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @param NpcInterface $element
     * @return bool
     */
    public function remove($element)
    {
        if ($element instanceof NpcInterface) {
            foreach ($this->npcList as $key => $npc) {
                $npc = new Npc($npc);
                if ($element->getId() == $npc->getId()) {
                    unset($this->npcList[$key]);
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * @return array
     */
    public function getNpcList()
    {
        $list = array();
        foreach ($this->npcList as $npc) {
            $listItem = new Npc($npc);
            $cp = $listItem->getBaseParams();
            $list[] = $listItem;
        }
        return $list;
    }

}
