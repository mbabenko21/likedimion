<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:55
 */
use MB\Glor\Npc\AbstractNpc;
use MB\I\LocationInterface;

interface MoveService
{
    /**
     * @abstract
     * @param \MB\Glor\Npc\AbstractNpc $npc
     * @param LocationInterface $fromLoc
     * @param LocationInterface $toLoc
     * @return void
     */
    public function move(AbstractNpc $npc, LocationInterface $toLoc, LocationInterface $fromLoc = null);
}
