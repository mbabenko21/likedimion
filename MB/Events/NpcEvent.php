<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 15:32
 */

namespace MB\Events;


use MB\Glor\Npc\AbstractNpc;
use Symfony\Component\EventDispatcher\Event;

class NpcEvent extends Event {
    /** @var  AbstractNpc */
    protected $_npc;
    public function __construct(AbstractNpc $npc){
        $this->_npc = $npc;
    }

    /**
     * @return \MB\Glor\Npc\AbstractNpc
     */
    public function getNpc()
    {
        return $this->_npc;
    }
} 