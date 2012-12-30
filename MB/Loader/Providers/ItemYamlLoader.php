<?php
namespace MB\Loader\Providers;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:45
 * To change this template use File | Settings | File Templates.
 */
use MB\Exception\FileNotFoundException;
use MB\Exception\ItemLoaderException;

class ItemYamlLoader extends YamlLoader
{
    public function __construct()
    {

    }

    public function load($itemId)
    {
        $locale = \MB\Container::get("app_config")->getLocale();
        $itemId = str_replace(array("_", "."), "/", $itemId);
        try {
            $itemsFile = $this->getBaseFolder() . "/item_game/" . $itemId . ".yml";
            parent::load($itemsFile);
        } catch (FileNotFoundException $e) {
            try {
                $itemsFile = $this->getBaseFolder(). "/items_base/" . $itemId . ".yml";
                parent::load($itemsFile);
            } catch (FileNotFoundException $e) {
                throw new ItemLoaderException("Item {$itemId} not found");
            }
        }
    }
}
