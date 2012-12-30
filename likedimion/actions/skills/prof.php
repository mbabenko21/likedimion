<?php
use MB\Container;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 10:48
 */
/** @var $authService \MB\Common\AuthService */
$authService = Container::get("auth_service");
$char = $authService->getCurrentUser()->getChar();

$data = array(
    "study_points" => $char->getCharParams()->studyPoints,
    "skills" => $char->getProffSkills(),
    "title" => \MB\Lang::line("menu", "prof_skills_title")
);

MB\View::make("game/skills/prof.tpl", $data);