<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 18:22
 */

namespace MB\Glor;


use MB\Glor\Npc\BaseNpc;
use MB\Helper\Column\Id;
use MB\Helper\Column\Params\BattleOptionsColumns;

/**
 * Class NpcBattleOptions
 * @package MB\Glor
 *
 * @Entity
 */
class NpcBattleOptions extends BattleOptions{

    /**
     * @var BaseNpc
     * @OneToOne(targetEntity="MB\Glor\Npc\BaseNpc")
     * @JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
    /**
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }
}