<?php
namespace MB\Services;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 18:23
 */
use MB\Common\AIService;
use MB\Exception\AIException;
use Doctrine\ORM\EntityNotFoundException;
use MB\I\LocationInterface;
use MB\Glor\Char\AbstractChar;
use MB\I\NpcInterface;
use MB\Exception\LocationException;
use MB\Common\CharService;
use MB\Common\MoveService;
use MB\Common\CalculatingService;
use MB\Glor\Locations\NpcList;
use MB\Glor\Npc\AbstractNpc;
use MB\Common\LocationService;

class AIServiceImpl implements AIService
{
    /** @var \MB\Common\LocationService */
    protected $locationService;
    /** @var \MB\Common\CalculatingService */
    protected $calculateService;
    /** @var \MB\Common\MoveService */
    protected $moveService;
    /** @var \MB\Common\CharService */
    protected $charService;

    /**
     * Обработка локации
     * @param string $locId
     * @return void
     */
    public function ai($locId)
    {
        $location = $this->locationService->getLocation($locId);
        $this->doRun($locId);
        /** @var $door \MB\I\DoorInterface */
        foreach ($location->getDoors() as $door) {
            $this->doRun($door->getTargetLocation());
        }
    }

    protected function doRun($locId)
    {
        $npcList = $this->locationService->npcListInstance($locId);
        $this->npcListAi($npcList);
    }

    /**
     *
     * @param \MB\Glor\Locations\NpcList $npcList
     */
    protected function npcListAi(NpcList $npcList)
    {
        $static = $npcList->getNpcList();
        /** @var $npc AbstractNpc */
        foreach ($static as $npc) {
            $this->calculateService->calculate($npc);
            $this->calculateService->regeneration($npc);
            $npcList->refresh($npc);
        }
        unset($static);
        $this->locationService->importLists($npcList);
        $this->moveNpc($npcList);
    }

    /**
     * Переходы нпс
     * @param \MB\Glor\Locations\NpcList $npcList
     */
    protected function moveNpc(NpcList $npcList)
    {
        $static = $npcList->getNpcList();
        $location = $this->locationService->getLocation($npcList->getLocId());
        $doors = $location->getDoors();
        /** @var $npc \MB\I\NpcInterface */
        foreach ($static as $npc) {
            $nextMoveTime = $npc->getCharParams()->nextMoveTime;
            $followerId = $npc->getFollower();
            $ownerId = $npc->getOwner();
            if ($followerId != 0 or $ownerId != 0) {
                $this->moveToChar($npc, $location);
            } elseif (time() >= $nextMoveTime) {
                /** @var $randDoor \MB\I\DoorInterface */
                $randDoor = $doors[array_rand($doors)];
                $toLoc = $this->locationService->getLocation($randDoor->getTargetLocation());
                $this->moveService->move($npc, $toLoc, $location);
            }
        }
    }

    /**
     * @param \MB\I\NpcInterface $npc
     * @param \MB\I\LocationInterface $fromLoc
     * @throws \MB\Exception\AIException
     * @return void
     */
    protected function moveToChar(NpcInterface $npc, LocationInterface $fromLoc)
    {
        $ownerId = $npc->getOwner();
        $followerId = $npc->getFollower();
        try {
            $char = $this->charService->findById($ownerId);
        } catch (EntityNotFoundException $e) {
            try {
                $char = $this->charService->findById($followerId);
            } catch (EntityNotFoundException $e) {
                throw new AIException("Follower not found to {$npc->getName()}");
            }
        }
        try {
            $toLoc = $fromLoc->getDoor($char->getCharParams()->location)->getTargetLocation();
            try {
                $toLoc = $this->locationService->getLocation(
                    $fromLoc->getDoor(
                        $toLoc
                    )->getTargetLocation()
                );
            } catch (LocationException $e) {
                $npc->follower = 0;
                $npc->owner = 0;
            }
        } catch (LocationException $e) {
            $toLoc = $fromLoc;
        }
        $this->moveService->move($npc, $toLoc, $fromLoc);
    }

    /**
     * @param \MB\Common\LocationService $locationService
     */
    public function setLocationService(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @param \MB\Common\CalculatingService $calculateService
     */
    public function setCalculateService(CalculatingService $calculateService)
    {
        $this->calculateService = $calculateService;
    }

    /**
     * @param \MB\Common\MoveService $moveService
     */
    public function setMoveService(MoveService $moveService)
    {
        $this->moveService = $moveService;
    }

    /**
     * @param \MB\Common\CharService $charService
     */
    public function setCharService(CharService $charService)
    {
        $this->charService = $charService;
    }
}
