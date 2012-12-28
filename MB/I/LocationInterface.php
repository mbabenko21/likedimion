<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 13:03
 */
interface LocationInterface extends ExportableInterface
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
    public function getPart();

    /**
     * @abstract
     * @return string
     */
    public function getInfo();

    /**
     * @abstract
     * @return int
     */
    public function getTerritory();
    /**
     * @return array
     */
    public function getDoors();

    /**
     *
     * @abstract
     * @param string $targetLoc
     * @return DoorInterface
     * @throws \MB\Exception\LocationException
     */
    public function getDoor($targetLoc);

    /**
     * @param DoorInterface $door
     * @internal param \MB\I\DoorInterface $targetDoor
     * @return void
     */
    public function addDoor(DoorInterface $door);

    /**
     * @param DoorInterface $door
     * @return void
     */
    public function dropDoor(DoorInterface $door);

    /**
     * @abstract
     * @return \MB\Glor\Locations\NpcList
     */
    public function getStaticNpcList();
}
