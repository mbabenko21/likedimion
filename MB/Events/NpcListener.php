<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 16:30
 */

namespace MB\Events;


use MB\Container;
use MB\Glor\Char\AbstractChar;
use MB\Glor\Npc\AbstractNpc;
use MB\Glor\Npc\AbstractPeopleNpc;
use MB\Lang;
use Symfony\Component\EventDispatcher\EventDispatcher;

class NpcListener {

    public static function onMove(MoveEvent $e){
        /** @var $dispatcher EventDispatcher */
        $dispatcher = Container::get("dispatcher");
        /** @var $locService \MB\Common\LocationService */
        $locService = \MB\Container::get("locations_service");
        /** @var $npc AbstractChar|AbstractNpc */
        $npc = $e->getNpc();
        $sex = $npc->getSex();
        $fromLID = $e->getFromLocID();
        $toLID = $e->getToLocID();
        $fromLoc = $locService->getLocation($fromLID);
        $door = $fromLoc->getDoor($toLID)->getName();
        $outMessage = sprintf(Lang::line("move", "out".$sex), $npc->getName(), $door);
        $inMessage = sprintf(Lang::line("move", "in".$sex), $npc->getName());
        $outEvent = new JournalMessageEvent($npc, $outMessage);
        $outEvent->setLocation($e->getFromLocID());
        $inEvent = new JournalMessageEvent($npc, $inMessage);
        $inEvent->setLocation($npc->getCharParams()->location);
        $dispatcher->dispatch(EventList::ADD_JOURNAL_ALL, $outEvent);
        $dispatcher->dispatch(EventList::ADD_JOURNAL_ALL, $inEvent);
        return;
    }

} 