<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 15:56
 */
use MB\I\NpcInterface;

interface NpcService
{
    /**
     * @abstract
     * @param string $npcId
     * @return \MB\I\NpcInterface
     */
    public function getNpc($npcId);

    /**
     * @abstract
     * @param \MB\I\NpcInterface $npc
     * @return void
     */
    public function persist(NpcInterface $npc);

    public function commit();
}
