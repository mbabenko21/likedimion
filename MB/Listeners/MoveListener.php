<?php
namespace MB\Listeners;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 21:15
 */
use MB\Events\MoveEvent;
use MB\Glor\Char\AbstractChar;
use MB\I\LocationInterface;
use MB\Common\JournalService;
use MB\Lang;
use MB\Helper\DateHelper;
use MB\Glor\Forum\Journal;
use MB\Glor\Post;

class MoveListener
{
    /** @var \MB\Common\JournalService */
    protected $journalService;

    public function onMove(MoveEvent $event)
    {
        $this->escape($event);
        $this->come($event);
    }

    /**
     * Кто-то куда-то пришел
     * @param \MB\Events\MoveEvent $event
     */
    protected function come(MoveEvent $event)
    {
        $message = Lang::line("helper", "come_move_message_" . $event->getNpc()->getCharParams()->sex);
        $message = sprintf($message, $event->getNpc()->getName());
        $this->createPost($message, $event, $event->getToLoc());
    }

    /**
     * Кто-то откуда-то ушел
     * @param \MB\Events\MoveEvent $event
     */
    protected function escape(MoveEvent $event)
    {
        $message = Lang::line("helper", "escape_move_message_" . $event->getNpc()->getCharParams()->sex);
        $fromLoc = $event->getFromLoc();
        $exit = $fromLoc->getDoor($event->getToLoc()->getId())->getDirection();
        $message = sprintf($message, $event->getNpc()->getName(), Lang::line("move", $exit));
        $this->createPost($message, $event, $event->getFromLoc());
    }

    /**
     * @param $message
     * @param \MB\Events\MoveEvent $event
     * @param \MB\I\LocationInterface $location
     */
    protected function createPost($message, MoveEvent $event, LocationInterface $location)
    {
        $post = new Post();
        $post->setMessage($message);
        $post->setPostDate(DateHelper::createDate());
        $post->setTrash(true);

        $journal = new Journal();
        if ($event->getNpc() instanceof AbstractChar) {
            $journal->setChar($event->getNpc());
        }
        $journal->setLocation($location);
        $journal->setCreated(DateHelper::createDate());
        $journal->setType(JournalService::JOURNAL_PUBLIC);
        $journal->setPost($post);
        $this->journalService->add($journal);
    }

    /**
     * @param \MB\Common\JournalService $journalService
     */
    public function setJournalService($journalService)
    {
        $this->journalService = $journalService;
    }
}
