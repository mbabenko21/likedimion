<?php
namespace MB\Glor\Params;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 13:14
 * To change this template use File | Settings | File Templates.
 * @property string $leftHand
 * @property string $rightHand
 * @property mixed $head
 * @property mixed $body
 * @property mixed $hand
 * @property mixed $leg
 * @property mixed $cloak
 * @property mixed $gloves
 * @property mixed $shoes
 * @property mixed $bras
 * @property mixed $amulet
 */

use MB\Exception\ItemLoaderException;

class Equip extends AbstractList
{
    public function __get($name)
    {
        return ($this->__isset($name)) ? parent::__get($name) : "";
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getLeftHand()
    {
        return $this->itemResolve($this->leftHand);
    }

    public function getRightHand()
    {
        return $this->itemResolve($this->rightHand);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getHead()
    {
        return $this->itemResolve($this->head);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getBody()
    {
        return $this->itemResolve($this->body);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getHand()
    {
        return $this->itemResolve($this->hand);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getLeg()
    {
        return $this->itemResolve($this->leg);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getCloak()
    {
        return $this->itemResolve($this->cloak);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getGloves()
    {
        return $this->itemResolve($this->gloves);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getShoes()
    {
        return $this->itemResolve($this->shoes);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getBras()
    {
        return $this->itemResolve($this->bras);
    }

    /**
     * @return \MB\I\ItemInterface
     */
    public function getAmulet()
    {
        return $this->itemResolve($this->amulet);
    }

    /**
     * @param $itemId
     * @return \MB\I\ItemInterface
     * @throws \MB\Exception\ItemLoaderException
     */
    protected function itemResolve($itemId)
    {
        /** @var $loader \MB\Common\ItemsService */
        $loader = \MB\Container::get("items_service");
        try {
            return $loader->getItem($itemId);
        } catch (ItemLoaderException $e) {
            throw $e;
        }
    }
}
