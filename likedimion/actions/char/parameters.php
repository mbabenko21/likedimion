<?php
use MB\Container;
use MB\Exception\ItemLoaderException;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 13:29
 */

/** @var $authService \MB\Common\AuthService */
$authService = Container::get("auth_service");
$char = $authService->getCurrentUser()->getChar();
$formuls = Container::instance("formuls");
try{
    $weapon = $char->getEquip()->getRightHand()->getAttackName();
} catch (ItemLoaderException $e){
    $weapon = "dogfight";
}
$data = array(
    "params" => $char->getWarParams(),
    "char" => $char,
    "weapon" => $weapon,
    "formuls" => $formuls,
    "title" => \MB\Lang::line("menu", "parameters")
);

MB\View::make("game/char/params.tpl", $data);