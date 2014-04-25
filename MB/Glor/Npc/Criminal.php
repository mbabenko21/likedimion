<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 17:30
 */

namespace MB\Glor\Npc;

use MB\Helper\Column\Description;
use MB\Helper\Column\Id;
use MB\Helper\Column\Name;

/**
 * Class Aggressive
 * @package MB\Glor\Npc
 *
 * @Entity
 */
class Criminal extends BaseNpc
{

    public function getType()
    {
        return self::CRIMINAL;
    }
}