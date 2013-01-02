<?php
use MB\Container;
use MB\Exception\ItemLoaderException;
use MB\Exception\ItemsException;
use MB\View;
use MB\Lang;
use MB\Helper\RequestHelper;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 22:42
 */

/** @var $itemService \MB\Common\ItemsService */
$itemService = Container::get("items_service");

$itemId = RequestHelper::get("id", null);
$data = array(
    "errors" => array()
);
if(!is_null($itemId)){
    try{
        $item = $itemService->getItem($itemId);
        $data["item"] = $item;
    }catch (ItemLoaderException $e){
        $data["errors"][] = sprintf(Lang::line("errors", "item_not_found"), $itemId);
    }
} else {
    $data["errors"][] = Lang::line("errors", "not_item");
}
$data["layout"] = "char_menu";
$data["char"] = $char;
View::make("game/about/item.tpl", $data);