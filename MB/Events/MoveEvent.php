<?php
namespace MB\Events;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:11
 */
use Symfony\Component\EventDispatcher\Event;
use MB\Glor\Npc\AbstractNpc;
use MB\I\NpcInterface;
use MB\I\LocationInterface;
use MB\I\EventsStorage;

class MoveEvent extends Event
{
    /** @var LocationInterface */
    protected $fromLoc;
    /** @var LocationInterface */
    protected $toLoc;
    /** @var \MB\Glor\Npc\AbstractNpc */
    protected $npc;

    public function __construct(AbstractNpc $npc, LocationInterface $fromLoc, LocationInterface $toLoc)
    {
        $this->setToLoc($toLoc);
        $this->setFromLoc($fromLoc);
        $this->setNpc($npc);
    }

    public function getName(){
        return EventsStorage::MOVE;
    }

    /**
     * @return \MB\I\LocationInterface
     */
    public function getFromLoc()
    {
        return $this->fromLoc;
    }

    /**
     * @param \MB\I\LocationInterface $fromLoc
     */
    public function setFromLoc(LocationInterface $fromLoc)
    {
        $this->fromLoc = $fromLoc;
    }

    /**
     * @return \MB\I\LocationInterface
     */
    public function getToLoc()
    {
        return $this->toLoc;
    }

    /**
     * @param \MB\I\LocationInterface $toLoc
     */
    public function setToLoc(LocationInterface $toLoc)
    {
        $this->toLoc = $toLoc;
    }

    /**
     * @return AbstractNpc
     */
    public function getNpc()
    {
        return $this->npc;
    }

    /**
     * @param AbstractNpc $npc
     */
    public function setNpc(AbstractNpc $npc)
    {
        $this->npc = $npc;
    }
}
