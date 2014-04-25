<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 16:22
 */

namespace MB\Events;


use MB\Glor\Npc\AbstractNpc;
use MB\Glor\Npc\AbstractPeopleNpc;
use Symfony\Component\EventDispatcher\Event;

class JournalMessageEvent extends Event {
    /**
     * @var \MB\Glor\Npc\AbstractPeopleNpc
     */
    protected $_char;
    /**
     * @var string
     */
    protected $_message;
    /**
     * @var AbstractPeopleNpc
     */
    protected $_noCharOne;
    /**
     * @var AbstractPeopleNpc
     */
    protected $_noCharTwo;
    /**
     * @var string
     */
    protected $_location;

    /**
     * @param \MB\Glor\Npc\AbstractNpc|\MB\Glor\Npc\AbstractPeopleNpc $char
     * @param string $message
     */
    public function __construct(AbstractNpc $char, $message){
        $this->_char = $char;
        $this->_message = $message;
    }

    /**
     * @return \MB\Glor\Npc\AbstractPeopleNpc
     */
    public function getChar()
    {
        return $this->_char;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * @return mixed
     */
    public function getNoCharOne()
    {
        return $this->_noCharOne;
    }

    /**
     * @param mixed $noCharOne
     */
    public function setNoCharOne($noCharOne)
    {
        $this->_noCharOne = $noCharOne;
    }

    /**
     * @return \MB\Glor\Npc\AbstractPeopleNpc
     */
    public function getNoCharTwo()
    {
        return $this->_noCharTwo;
    }

    /**
     * @param \MB\Glor\Npc\AbstractPeopleNpc $noCharTwo
     */
    public function setNoCharTwo($noCharTwo)
    {
        $this->_noCharTwo = $noCharTwo;
    }

    /**
     * @return string
     */
    public function getLocationID()
    {
        return $this->_location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->_location = $location;
    }
} 