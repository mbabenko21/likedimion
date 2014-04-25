<?php
use Doctrine\ORM\EntityNotFoundException;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 18:50
 */

/** @var $authService \MB\Common\AuthService */
$authService = \MB\Container::get("auth_service");

if($authService->hasLogged()){
    try{
        $user = $authService->getCurrentUser();
        $char = $user->getChar();
        $char->getCharParams()->timeLastAction = time();
        \MB\Container::register("formuls", require ROOT_DIR."/Resources/config/formuls.php");
        if(empty($_GET["do"])){
            $_GET["do"] = "main";
        }
        /** @var $eventListener \MB\Events\Listener */
        $eventListener = \MB\Container::get("event_listeners");
        $eventListener->configure();

        /** @var $calculateService \MB\Common\CalculatingService */
        $calculateService = \MB\Container::get("calculate_service");
        $calculateService->calculate($char);
        $calculateService->regeneration($char);
        /** @var $ai \MB\Common\AIService */
        $ai = \MB\Container::get("ai");
        $ai->ai($char->getCharParams()->location);
        require_once dirname(__FILE__)."/router.php";
        /** @var $charService \MB\Common\CharService */
        $charService = \MB\Container::get("char_service");
        $charService->persist($char);
        $charService->commit();
    } catch(EntityNotFoundException $e){
        header("Location: login.php");
    }
} else {
    header("Location: login.php");
}