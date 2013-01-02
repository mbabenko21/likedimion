<?php
namespace MB\Items;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:45
 * To change this template use File | Settings | File Templates.
 */
use MB\I\ItemInterface;
use Doctrine\Common\Collections\ArrayCollection;
use MB\Glor\Params\ItemNeeds;
use MB\Glor\Params\ItemParams;
use MB\I\WordsInterface;

class Item implements ItemInterface
{
    protected $item = array();


    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @param string $form
     * @return string
     */
    public function getName($form = WordsInterface::SINGULAR)
    {
        if (isset($this->item["name"][$form])) {
            return $this->item["name"][$form];
        } else {
            return "No Name Item";
        }
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        if (isset($this->item["look"])) {
            return $this->item["look"];
        } else {
            return \MB\Lang::line("errors", "info_not_found");
        }
    }

    /**
     * @return ItemParams
     */
    public function getParams()
    {
        if (isset($this->item["params"])) {
            $params = $this->item["params"];
        } else {
            $params = array();
        }
        return new ItemParams($params);
    }

    /**
     * @return \MB\Glor\Params\ItemNeeds
     */
    public function getNeeds()
    {
        if (is_array($this->item["needs"])) {
            $params = $this->item["needs"];
        } else {
            $params = array();
        }
        return new ItemNeeds($params);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getJaks()
    {
        if (is_array($this->item["jaks"])) {
            $params = $this->item["jaks"];
        } else {
            $params = array();
        }
        return new ArrayCollection($params);
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return (isset($this->item["count"])) ? $this->item["count"] : 0;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->item["count"] = $count;
    }

    /**
     * @param int $count
     */
    public function add($count)
    {
        $this->setCount($this->getCount() + $count);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return isset($this->item["id"]) ? $this->item["id"] : "";
    }

    /**
     * @param string $id
     */
    public function  setId($id)
    {
        $this->item["id"] = $id;
    }

    /**
     * @return bool
     */
    public function strengeImpact()
    {
        if (!isset($this->item["type"])) {
            $type = false;
        } else {
            switch ($this->item["type"]) {
                case "sword":
                case "bow":
                case "spear":
                case "axe":
                case "hummer":
                case "knife":
                    $type = true;
                    break;
                case "crossbow":
                case "staff":
                    $type = false;
                    break;
                default:
                    $type = false;
                    break;
            }
        }
        return $type;
    }

    /**
     * @return string
     */
    public function getAttackName()
    {
        return isset($this->item["attack_name"]) ? $this->item["attack_name"] : "";
    }

    /**
     * @return int
     */
    public function getType()
    {
        if (!isset($this->item["type"])) {
            $type = ItemInterface::MISC;
        } else {
            switch ($this->item["type"]) {
                case "sword":
                case "knife":
                case "axe":
                    $type = ItemInterface::COLD_WEAPON;
                    break;
                case "staff":
                    $type = ItemInterface::MAGIC_WEAPON;
                    break;
                case "bow":
                case "crossbow":
                    $type = ItemInterface::RANGED_WEAPON;
                    break;
                case "hummer":
                    $type = ItemInterface::CRUSH_WEAPON;
                    break;
                case "head":
                case "hand":
                case "body":
                case "shoes":
                case "gloves":
                case "leg":
                    $type = ItemInterface::ARMOR;
                    break;
                default:
                    $type = ItemInterface::MISC;
                    break;
            }
        }
        return $type;
    }

    /**
     * @return int
     */
    public function getModificationLevel()
    {
        return isset($this->item["modification"]) ? (int)$this->item["modification"] : 0;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->item["image"];
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return (int) $this->item["cost"];
    }

    /**
     * @return string
     */
    public function getMaster()
    {
        return (isset($this->item["master"])) ? $this->item["master"] : "";
    }
}
