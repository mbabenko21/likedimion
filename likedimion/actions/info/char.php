<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 20.04.14
 * Time: 22:37
 */
$authService = \MB\Container::get("auth_service");
/** @var \MB\Glor\Char\AbstractChar $char */
$char = $authService->getCurrentUser()->getChar();
/** @var $locService \MB\Common\LocationService */
$locService = \MB\Container::get("locations_service");

/** @var $charService \MB\Common\CharService */
$charService = \MB\Container::get("char_service");

$uid = \MB\Helper\RequestHelper::get("uid", $char->getId());

try {
    $character = $charService->findById($uid);
} catch (\Doctrine\ORM\EntityNotFoundException $e) {
    $character = $char;
}
$charParams = $character->getCharParams();
$location = $locService->getLocation($charParams->location);
$data = array(
    "title" => \MB\Lang::line("menu", "char"),
    "char" => $character,
    "status" => $character->getStatus(),
    "include_menu" => false,
    "attack" => $character->getRace() != $char->getRace() ? 1 : 0,
    "territory" => $location->getTerritory(),
    "life_p" => round($character->getCharParams()->life/$character->getCharParams()->maxLife,2),
    "mana_p" => round($character->getCharParams()->energy/$character->getCharParams()->maxEnergy,2),
);
MB\View::make("game/char/about.tpl", $data);