<?php
namespace MB\I;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */
interface ItemInterface
{
    const MISC = 1;
    const COLD_WEAPON = 2;
    const RANGED_WEAPON = 3;
    const CROSSBOW = 4;
    const MAGIC_WEAPON = 5;
    const CRUSH_WEAPON = 6;
    const ARMOR = 3;

    /**
     * @abstract
     * @param string $form
     * @return string
     */
    public function getName($form = WordsInterface::SINGULAR);

    /**
     * @abstract
     * @return string
     */
    public function getInfo();

    /**
     * @abstract
     * @return \MB\Glor\Params\ItemParams
     */
    public function getParams();

    /**
     * @abstract
     * @return \MB\Glor\Params\ItemNeeds
     */
    public function getNeeds();

    /**
     * @abstract
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getJaks();

    /**
     * @abstract
     * @return int
     */
    public function getModificationLevel();

    /**
     * @abstract
     * @return int
     */
    public function getCount();

    /**
     * @abstract
     * @return string
     */
    public function getId();

    /**
     * @abstract
     * @return bool
     */
    public function strengeImpact();

    /**
     * @abstract
     * @return string
     */
    public function getAttackName();

    /**
     * @abstract
     * @return int
     */
    public function getType();

    /**
     * @abstract
     * @return string
     */
    public function getImage();

    /**
     * @abstract
     * @return int
     */
    public function getCost();

    /**
     * @abstract
     * @return string
     */
    public function getMaster();
}
