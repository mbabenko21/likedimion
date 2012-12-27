<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:55
 */
use MB\Glor\Npc\AbstractNpc;
use MB\I\NpcInterface;
use MB\I\LocationInterface;

interface MoveService
{
    /**
     * @abstract
     * @param \MB\Glor\Npc\AbstractNpc|\MB\I\NpcInterface $npc
     * @param LocationInterface $toLoc
     * @param LocationInterface $fromLoc
     * @return void
     */
    public function move(NpcInterface $npc, LocationInterface $toLoc, LocationInterface $fromLoc = null);
}
