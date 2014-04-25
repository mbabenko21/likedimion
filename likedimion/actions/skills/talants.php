<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 20.04.14
 * Time: 23:27
 */
use MB\Container;

/** @var $authService \MB\Common\AuthService */
$authService = Container::get("auth_service");
/** @var \MB\Common\SkillsService $skillsService */
$skillsService = Container::get("skills_service");

$char = $authService->getCurrentUser()->getChar();

$war = $char->getWarParams();
$charClass = $char->getClass();
if(substr($charClass, 1) == "h"){
    $magicSchools = array(
        "fire" => $skillsService->getSchool("fireschool"),
        "cold" => $skillsService->getSchool("coldschool"),
        "earth" => $skillsService->getSchool("earthschool"),
        "dark" => array(),
    );
} elseif(substr($charClass, 1) == "s"){
    $magicSchools = array("bows", "crossbows", "fireweapon");
} elseif(substr($charClass, 1) == "w"){
    $magicSchools = array("swords", "dualswords", "knifes");
}
$magicSchool = \MB\Helper\RequestHelper::get("school", "fire");
$skillsInfo = array();


$data = array(
    "study_points" => $char->getCharParams()->studyPoints,
    "skills" => $talants,
    "skills_info" => $skillsInfo,
    "title" => \MB\Lang::line("menu", "prof_skills_title"),
    "magic_schools" => $magicSchools,
    "current_school" =>$magicSchools[$magicSchool]
);

MB\View::make("game/skills/talants.tpl", $data);