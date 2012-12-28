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
/** @var $moveService \MB\Common\MoveService */
$moveService = \MB\Container::get("move_service");
/** @var $journalService \MB\Common\JournalService */
$journalService = \MB\Container::get("journal_service");
$journalService->clearJournal();
$errors = array();
/**
 * Переход между локациями
 */
if (!is_null($targetLoc)) {
    $charParams = $char->getCharParams();
    $charParams->sex = "m";
    $char->setCharParams($charParams);
    try {
        $location = $locService->getLocation($charParams->location);
        $door = $location->getDoor($targetLoc);
        try {
            $targetLoc = $locService->getLocation($targetLoc);
            $moveService->move($char, $targetLoc, $location);
        } catch (\Exception $e) {
            $errors[] = sprintf(\MB\Lang::line("errors", "load_loc_failed"), $targetLoc->getId());
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
foreach($npcList as $npc){
    if($npc->getType() == "man"){
        $mans[] = $npc;
    } else {
        $others[] = $npc;
    }
}

$expP = $expTable->getLevel($char->getLevel()+1)->getExpPercent($char->getCharParams()->expirience, $char->getLevel()+1);
$journal = $journalService->getLocJournal($location);
$charList = $locService->charListInstance($locId);
$data = array(
    "char" => $char->getCharParams(),
    "name" => $char->getName(),
    "level" => $char->getLevel(),
    "need_exp" => $expTable->getLevel($char->getLevel() + 1)->getNeedExpToLevel(),
    "doors" => $location->getDoors(),
    "title" => $location->getName(),
    "info" => $location->getInfo(),
    "errors" => $errors,
    "char_list" => $charList,
    "mans" => $mans,
    "others" => $others,
    "life_p" => round($char->getCharParams()->life/$char->getCharParams()->maxLife,2),
    "mana_p" => round($char->getCharParams()->energy/$char->getCharParams()->maxEnergy,2),
    "exp_p"  => $expP,
    "journal" => array_reverse($journal),
);

MB\View::make("game/main/index.tpl", $data);
