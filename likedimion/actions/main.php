<?php
use MB\Container;
use MB\Helper\RequestHelper;
use MB\Exception\LocationException;
use MB\Locations\Door;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 19:36
 */
/** @var $authService \MB\Common\AuthService */
$authService = \MB\Container::get("auth_service");
$char = $authService->getCurrentUser()->getChar();
$targetLoc = \MB\Helper\RequestHelper::get("go", null);
/** @var $locService \MB\Common\LocationService */
$locService = \MB\Container::get("locations_service");


/** @var $charService \MB\Common\CharService */
$charService = \MB\Container::get("char_service");
/** @var $eventDispatcher \Symfony\Component\EventDispatcher\EventDispatcher */
$eventDispatcher = Container::get("dispatcher");

/** @var $moveService \MB\Common\MoveService */
$moveService = Container::get("move_service");
$errors = array();
$journal = $char->getJournal();
$journal->clearJournal();
$char->setJournal($journal);
/**
 * Переход между локациями
 */
if (!is_null($targetLoc)) {
    $charParams = $char->getCharParams();
    try {
        $location = $locService->getLocation($charParams->location);
        $door = $location->getDoor($targetLoc);
        try {
            $targetLoc = $locService->getLocation($targetLoc);
            /*$oldLoc = $char->getCharParams()->location;
            $charListOld = $locService->charListInstance($char->getCharParams()->location);
            $charListNew = $locService->charListInstance($targetLoc->getId());
            $charParams->location = $targetLoc->getId();
            $char->setCharParams($charParams);
            $charListOld->remove($char);
            $charListNew->add($char);
            $locService->importLists($charListOld, $charListNew);*/
            $moveService->move($char, $targetLoc);
            //$eventDispatcher->dispatch(\MB\Events\EventList::ON_MOVE, new \MB\Events\MoveEvent($char, $oldLoc, $char->getCharParams()->location));
            RequestHelper::redirect("/?do=main&" . rand(0000, 9999));
        } catch (\Exception $e) {
            $errors[] = sprintf(\MB\Lang::line("errors", "load_loc_failed"), $targetLoc);
        }
    } catch (LocationException $e) {
        $errors[] = \MB\Lang::line("errors", "door_not_found");
    }
    //
}

/** @var $expTable \MB\I\ExpTableInterface */
$expTable = Container::get("exp_table");

$locId = $char->getCharParams()->location;
$location = $locService->getLocation($locId);
$npcList = $locService->npcListInstance($locId)->getNpcList();
$mans = array();
$others = array();
/** @var $npc \MB\Npc\Npc */
foreach ($npcList as $npc) {
    if ($npc->getType() == "man") {
        $mans[] = $npc;
    } else {
        $others[] = $npc;
    }
}

$expP = $expTable->getLevel($char->getLevel() + 1)->getExpPercent($char->getCharParams()->expirience, $char->getLevel() + 1);

/** @var \MB\Common\SkillsService $skillsService */
$skillsService = Container::get("skills_service");

$talants = $char->getTalants()->export();
/*$cooldown = $char->getCooldown();
$cooldown->setCoolDown("firearrow", 20);
$cooldown->setCoolDown("firecolumn", 180);
$char->setCooldown($cooldown);*/
$talantsForView = array();
$pointTalantsForView = array();
foreach ($talants as $talant => $talantLevel) {
    try {
        $skill = $skillsService->findSkillByID($talant);
        if($skill->getType() == \MB\Helper\SkillHelper::AOE or $skill->getType() == \MB\Helper\SkillHelper::MINI_AOE and $skill->getLevel() > 0){
            $talantsForView[$talant] = $skill;
        }
        if($skill->getType() == \MB\Helper\SkillHelper::POINT and $skill->getLevel() > 0){
            $pointTalantsForView[$talant] = $skill;
        }
    } catch (\MB\Exception\SkillException $e) {
        continue;
    }
}
$charList = $locService->charListInstance($locId);
$cL = $charList->export();
$data = array(
    "player" => $char,
    "char" => $char->getCharParams(),
    "name" => $char->getName(),
    "level" => $char->getLevel(),
    "need_exp" => $expTable->getLevel($char->getLevel() + 1)->getNeedExpToLevel(),
    "doors" => $location->getDoors(),
    "title" => $location->getName(),
    "info" => $location->getInfo(),
    "errors" => $errors,
    "char_list" => $charList->export(),
    "mans" => $mans,
    "others" => $others,
    "life_p" => round($char->getCharParams()->life / $char->getCharParams()->maxLife, 2),
    "mana_p" => round($char->getCharParams()->energy / $char->getCharParams()->maxEnergy, 2),
    "exp_p" => $expP,
    "aoe_talants" => $talantsForView,
    "points_talants" => $pointTalantsForView
);

MB\View::make("game/main/index.tpl", $data);
