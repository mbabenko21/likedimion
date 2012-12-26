<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 13:09
 */
use MB\I\LocationInterface;
use MB\Glor\Locations\CharList;
use MB\I\ExportableInterface;

interface LocationService
{
    /**
     * @abstract
     * @param $locId
     * @return \MB\I\LocationInterface
     */
    public function getLocation($locId);

    /**
     * @abstract
     * @param string $locId
     * @return \MB\Glor\Locations\CharList
     */
    public function charListInstance($locId);

    /**
     * @abstract
     * @param $locId
     * @return \MB\Glor\Locations\NpcList
     */
    public function npcListInstance($locId);

    /**
     * @abstract
     * @return void
     */
    public function importLists();
    /**
     * @abstract
     * @param \MB\I\LocationInterface $location
     * @return void
     */
    public function persist(LocationInterface $location);

    public function commit();
}
