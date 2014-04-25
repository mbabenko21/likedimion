<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 16:21
 */

namespace MB\Events;


use MB\Common\CharService;
use MB\Common\LocationService;
use MB\Container;
use MB\I\LocaleInterface;

class JournalListener {

    public static function addJournal(JournalMessageEvent $event){
        /** @var $charService CharService */
        $charService = Container::get("char_service");
        $journal = $event->getChar()->getJournal();
        $journal->addMessage($event->getMessage());
        $event->getChar()->setJournal($journal);
        $charService->persist($event->getChar());
        $charService->commit();
    }

    public static function addJournalAll(JournalMessageEvent $event){
        /** @var $locationsService LocationService */
        $locationsService = Container::get("locations_service");
        $charList = $locationsService->charListInstance($event->getLocationID());
        return;
    }
} 