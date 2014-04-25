<?php
/** @var $char \MB\Glor\Char\AbstractChar */
$char = \Mb\Container::get("auth_service")->getCurrentUser()->getChar();
$war = $char->getWarParams();
$talants = $char->getTalants();
$baseParams = $char->getBaseParams();
return array(
    /**
     * Формулы расчета навыков
     */
    "skills" => array(
        "firearrow"             => round($war->magicBoost * ($talants->firearrow + 1)*1.5)  + round($war->magicBoost * ($talants->firearrow + 1)*0.8) * 0.05*$talants->fireschool,
        "firearrow_mp"          => 15 + ($talants->firearrow+1) * 15,
        "fireball"              => round($war->magicBoost * ($talants->fireball + 1)*1.1)  + round($war->magicBoost * ($talants->fireball + 1)*0.6) * 0.05*$talants->fireschool,
        "fireball_mp"           => 25 + ($talants->fireball+1) * 25,
        "fireschool"            => $talants->fireschool * 5,
        "firecolumn"            => round($war->magicBoost * ($talants->firecolumn + 1)*0.9)  + round($war->magicBoost * ($talants->firecolumn + 1)*0.4) * 0.05*$talants->fireschool,
        "firecolumn_mp"         => 45 + ($talants->firecolumn+1) * 35,
        "fireway_boost"         => 20 + $talants->fireway * 20,
        "fireway_time"          => 20,
        "coldblow_damage"       => round($war->magicBoost * ($talants->coldblow + 1)*0.7)  + round($war->magicBoost * ($talants->coldblow + 1)*0.7) * 0.05*$talants->coldschool,
        "coldblow_time"         => 4 + $talants->coldblow*2 + $talants->coldschool + 1,
        "coldblow_mp"           => 10 + ($talants->coldblow+1) * 15,
        "coldschool_damage"     => $talants->coldschool * 5 + 5,
        "coldschool_time"       => $talants->coldschool + 1,
        "coldcolumn_mp"         => 30 + ($talants->coldcolumn) * 15,
        "coldcolumn_damage"     => round($war->magicBoost * ($talants->coldcolumn + 1)*0.5)  + round($war->magicBoost * ($talants->coldcolumn + 1)*0.5) * 0.05*$talants->coldschool,
        "coldcolumn_time"       => 1 + $talants->coldcolumn + $talants->coldschool + 1,
        "coldspikes_damage"     => round($war->magicBoost * ($talants->coldspikes + 1)*0.3)  + round($war->magicBoost * ($talants->coldspikes + 1)*0.3) * 0.05*$talants->coldschool,
        "coldspikes_time"       => 3 + $talants->coldspikes * 2 + $talants->coldschool + 1,
        "coldspikes_mp"         => 60 + ($talants->coldspikes) * 45,
        "stoneskin"             => 20 + $talants->stoneskin * 20,
        "earthquake_mp"         => 80 + $talants->earthquake *50,
        "passivephysdef"        => $talants->passivephysdef * 5,
        "passivelife"           => $talants->passivelife * 6,
        "passivemanaregen"      => 2 + $talants->passivemanaregen*2,
    ),

    "params" => array(
        "life_per_second"      => ceil($baseParams->regeneration/2),
        "mana_per_second"      => ceil($baseParams->meditation/2) + (2 + $talants->passivemanaregen*2),
        "max_life"             => round(10 + $baseParams->life * 10 + $baseParams->strenge * 2 + (10 + $baseParams->life * 10 + $baseParams->strenge * 2)*(($talants->passivelife * 6)/100)),
        "max_mana"             => round(10 + $baseParams->energy * 10 + $baseParams->intelligence * 5),
        "magic_boost"          => $baseParams->intelligence * 5,
        "attack"               => $baseParams->strenge * 5,

    ),

    "baffs" => array(
        "standart_baff_time"    => 20,
    ),

    "helper" => array(
        "random"                => rand(0000,9999),
    ),
);