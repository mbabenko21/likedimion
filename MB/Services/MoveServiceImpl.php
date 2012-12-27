<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 22:00
 */
use MB\Common\MoveService;
use MB\Exception\FileNotFoundException;
use MB\Exception\MoveException;
use MB\I\NpcInterface;
use MB\Common\LocationService;
use MB\Glor\Char\AbstractChar;
use MB\Glor\Npc\AbstractPeopleNpc;
use MB\I\LocationInterface;
use MB\Glor\Npc\AbstractNpc;

class MoveServiceImpl implements MoveService
{
    /** @var \MB\Common\LocationService */
    protected $locationService;

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
        $fromCharList = $this->locationService->charListInstance($char->getCharParams()->location);
        $toCharList = $this->locationService->charListInstance($toLoc->getId());
        $fromCharList->remove($char);
        $toCharList->add($char);
        $this->locationService->importLists($fromCharList, $toCharList);
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
}
