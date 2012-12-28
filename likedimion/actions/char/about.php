<?php
use MB\Container;
use MB\Glor\Char\AbstractChar;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 23:55
 */

/** @var $authService \MB\Common\AuthService */
$authService = Container::get("auth_service");
$char = $authService->getCurrentUser()->getChar();
/*$eq = $char->getEquip();
$eq->rightHand = "i_w_k_nov";
$char->setEquip($eq);
/** @var $charService \MB\Common\CharService
$charService = Container::get("char_service");
$charService->persist($char);
$charService->commit();*/
$data = array(
    "title" => \MB\Lang::line("menu", "char"),
    "char" => $char,
    "status" => $char->getStatus()
);
MB\View::make("game/char/about.tpl", $data);