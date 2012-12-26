<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 9:23
 */
use MB\Glor\Npc\AbstractNpc;

interface CalculatingService
{
    /**
     * Пересчет параметров
     * @abstract
     * @param \MB\Glor\Npc\AbstractNpc $npc
     * @return void
     */
    public function calculate(AbstractNpc $npc);

    /**
     * @abstract
     * @param \MB\Glor\Npc\AbstractNpc $npc
     * @return void
     */
    public function regeneration(AbstractNpc $npc);
}
