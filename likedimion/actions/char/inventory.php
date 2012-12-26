<?php
use MB\Container;
use MB\Exception\ItemLoaderException;
use MB\Helper\RequestHelper;
use MB\Helper\Paginator;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:02
 */
/** @var $authService \MB\Common\AuthService */
$authService = Container::get("auth_service");
/** @var $crypter \MB\Crypt */
$crypter = Container::get("crypter");
$data = array();
$user = $authService->getCurrentUser();
$char = $user->getChar();
$items = $char->getItems();
$up = RequestHelper::get("up", null);
if(!is_null($up)){
    $itemId = $up;
    try{
        $item = $char->getItems()->{$itemId};
        $items->up($item);
        $char->setItems($items);
    } catch(ItemLoaderException $e){
        $data["errors"][] = $e->getMessage();
    }
}
$down = RequestHelper::get("down", null);
if(!is_null($down)){
    $itemId = $down;
    try{
        $item = $char->getItems()->{$itemId};
        $items->down($item);
        $char->setItems($items);
    } catch(ItemLoaderException $e){
        $data["errors"][] = $e->getMessage();
    }
}
$itemList = $char->getItems()->getCurrentPage();
$data["items"] = $itemList;
$data["char"] = $char;
$data["paginator"] = $char->getItems()->getPaginator();

MB\View::make("game/char/inv.tpl", $data);