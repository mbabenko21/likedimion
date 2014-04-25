<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 22:00
 */
use MB\Common\CharService;
use MB\Common\MoveService;
use MB\Events\EventList;
use MB\Events\JournalMessageEvent;
use MB\Events\MoveEvent;
use MB\Exception\FileNotFoundException;
use MB\Exception\MoveException;
use MB\Helper\CooldownBank;
use MB\I\NpcInterface;
use MB\Common\LocationService;
use MB\Glor\Char\AbstractChar;
use MB\Glor\Npc\AbstractPeopleNpc;
use MB\I\LocationInterface;
use MB\Glor\Npc\AbstractNpc;
use MB\Lang;
use Symfony\Component\EventDispatcher\EventDispatcher;

class MoveServiceImpl implements MoveService
{
    /** @var \MB\Common\LocationService */
    protected $locationService;
    /** @var  CharService */
    protected $charService;
    /** @var  EventDispatcher */
    protected $_eventDispatcher;

    /**
     * @param \MB\Glor\Npc\AbstractNpc|\MB\I\NpcInterface $npc
     * @param LocationInterface $toLoc
     * @param LocationInterface $fromLoc
     * @throws \MB\Exception\MoveException
     * @return void
     */
    public function move(NpcInterface $npc, LocationInterface $toLoc, LocationInterface $fromLoc = null)
    {
        if ($npc instanceof AbstractChar) {
            $this->moveChar($npc, $toLoc);
        } elseif ($npc instanceof NpcInterface) {
            if (!is_null($fromLoc)) {
                $this->moveNpc($npc, $toLoc, $fromLoc);
            } else {
                throw new MoveException("From loc can not be null to NpcInterface");
            }
        }
    }

    /**
     * Перемещение игрока
     * @param \MB\Glor\Char\AbstractChar $char
     * @param \MB\I\LocationInterface $toLoc
     */
    protected function moveChar(AbstractChar $char, LocationInterface $toLoc)
    {
        $coolDowns = $char->getCooldown();
        if($coolDowns->getTime(CooldownBank::MOVE) < 1){
            $oldLocID = $char->getCharParams()->location;
            $fromCharList = $this->locationService->charListInstance($oldLocID);
            $toCharList = $this->locationService->charListInstance($toLoc->getId());
            $fromCharList->remove($char);
            $toCharList->add($char);
            $charParams = $char->getCharParams();
            $coolDowns->setCoolDown(CooldownBank::MOVE, 2);
            $charParams->location = $toLoc->getId();
            $char->setCharParams($charParams);
            $char->setCooldown($coolDowns);
            $this->charService->persist($char);
            $this->charService->commit();
            $this->locationService->importLists($fromCharList, $toCharList);
            $this->_eventDispatcher->dispatch(EventList::ON_MOVE, new MoveEvent($char, $oldLocID, $toLoc->getId()));
        } else {
            $message = sprintf(Lang::line("cooldowns", "move"), $coolDowns->getTime(CooldownBank::MOVE));
            $this->_eventDispatcher->dispatch(EventList::ADD_JOURNAL, new JournalMessageEvent($char, $message));
        }
    }

    /**
     * Передвижение НПС
     * @param \MB\I\NpcInterface $npc
     * @param \MB\I\LocationInterface $toLoc
     * @param \MB\I\LocationInterface $fromLoc
     * @throws \MB\Exception\MoveException
     * @return void
     */
    protected function moveNpc(NpcInterface $npc, LocationInterface $toLoc, LocationInterface $fromLoc)
    {
        $charParams = $npc->getCharParams();
        $move = $npc->getMove();
        $moveLock = $npc->getMoveLock();
        //TODO: передвижение должно произойти только если мы разрешили двигаться и он никого не атакует и не следует
        if ($move[0] > 0 and false === $npc->getMoveLock()) {
            try {
                $fromNpcList = $this->locationService->npcListInstance($fromLoc->getId());
                $toNpcList = $this->locationService->npcListInstance($toLoc->getId());
                $fromNpcList->remove($npc);
                if ($npc->getFreeMoveSteps() < 2) {
                    $charParams->nextMoveTime = time() + rand($move[1], $move[2]);
                    $npc->setFreeMoveSteps($move[0]);
                } else {
                    $npc->setFreeMoveSteps($npc->getFreeMoveSteps()-1);
                }
                $npc->setCharParams($charParams);
                $toNpcList->add($npc);
                $this->locationService->importLists($fromNpcList, $toNpcList);
                $this->_eventDispatcher->dispatch(EventList::ON_MOVE, new MoveEvent($npc, $fromLoc->getId(), $toLoc->getId()));
            } catch (FileNotFoundException $e) {
                throw new MoveException("Transaction to {$toLoc->getId()} is impossible");
            }
        }
    }

    /**
     * @param \MB\Common\LocationService $locationService
     */
    public function setLocationService(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @param \MB\Common\CharService $charService
     */
    public function setCharService($charService)
    {
        $this->charService = $charService;
    }

    /**
     * @param \Symfony\Component\EventDispatcher\EventDispatcher $eventDispatcher
     */
    public function setEventDispatcher($eventDispatcher)
    {
        $this->_eventDispatcher = $eventDispatcher;
    }
}
