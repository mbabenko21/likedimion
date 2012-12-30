<?php
namespace MB\I;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 15:41
 */

interface NpcInterface
{
    /**
     * @abstract
     * @return string
     */
    public function getId();
    /**
     * @abstract
     * @return string
     */
    public function getName();

    /**
     * @abstract
     * @return string
     */
    public function getInfo();

    /**
     * @abstract
     * @return string
     */
    public function getType();

    /**
     * @abstract
     * @return string
     */
    public function getDialog();

    /**
     * @abstract
     * @return \MB\Glor\Params\CharParams
     */
    public function getCharParams();

    /**
     * @abstract
     * @return \MB\Glor\Params\BaseParams
     */
    public function getBaseParams();

    /**
     * @abstract
     * @return \MB\Glor\Params\WarParams
     */
    public function getWarParams();

    /**
     * @abstract
     * @return \MB\Glor\Params\WarSkills
     */
    public function getWarSkills();

    /**
     * @abstract
     * @return array
     */
    public function getRespawn();

    /**
     * @abstract
     * @return array
     */
    public function getMove();

    /**
     * @abstract
     * @return int
     */
    public function getOwner();

    /**
     * @abstract
     * @return int
     */
    public function getFollower();

    /**
     * @abstract
     * @return bool
     */
    public function getMoveLock();

    /**
     * @abstract
     * @return int
     */
    public function getFreeMoveSteps();
}
