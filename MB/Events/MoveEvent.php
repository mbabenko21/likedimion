<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 15:40
 */

namespace MB\Events;


use MB\Glor\Npc\AbstractNpc;
use Symfony\Component\EventDispatcher\Event;

class MoveEvent extends Event {
    /**
     * @var \MB\Glor\Npc\AbstractNpc
     */
    protected $_npc;
    /**
     * @var string
     */
    protected $_fromLocID;
    /**
     * @var string
     */
    protected $_toLocID;

    /**
     * @param AbstractNpc $npc
     * @param string $fromLocID
     * @param string $toLocID
     */
    public function __construct(AbstractNpc $npc, $fromLocID, $toLocID){
        $this->_npc = $npc;
        $this->_fromLocID = $fromLocID;
        $this->_toLocID = $toLocID;
    }

    /**
     * @return \MB\Glor\Npc\AbstractNpc
     */
    public function getNpc()
    {
        return $this->_npc;
    }

    /**
     * @return string
     */
    public function getFromLocID()
    {
        return $this->_fromLocID;
    }

    /**
     * @return string
     */
    public function getToLocID()
    {
        return $this->_toLocID;
    }
} 