<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:59
 */
use MB\Glor\Npc\AbstractNpc;

interface RegenerationService
{
    public function lifeRegen(AbstractNpc $npc);
}
