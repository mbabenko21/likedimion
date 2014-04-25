<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 18:48
 */
use MB\Container;

/** @var $authService \MB\Common\AuthService */
$authService = \MB\Container::get("auth_service");
$char = $authService->getCurrentUser()->getChar();
/** @var \MB\Common\SkillsService $skillsService */
$skillsService = Container::get("skills_service");

$talantId = \MB\Helper\RequestHelper::get("talantId", null);

