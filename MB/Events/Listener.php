<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 9:06
 */

namespace MB\Events;


use MB\Lang;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\EventDispatcher\EventDispatcher;

class Listener
{
    /** @var  EventDispatcher */
    protected $dispatcher;
    /** @var  Container */
    protected $container;

    public function configure()
    {
        $this->dispatcher->addListener(EventList::ON_MOVE, array('MB\Events\NpcListener', 'onMove'));
        $this->dispatcher->addListener(EventList::ADD_JOURNAL, array('MB\Events\JournalListener', 'addJournal'));
        $this->dispatcher->addListener(EventList::ADD_JOURNAL_ALL, array('MB\Events\JournalListener', 'addJournalAll'));
    }

    /**
     * @param \Symfony\Component\EventDispatcher\EventDispatcher $dispatcher
     */
    public function setDispatcher($dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * @param \Symfony\Component\DependencyInjection\Container $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }
} 