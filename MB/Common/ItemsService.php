<?php
namespace MB\Common;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:36
 * To change this template use File | Settings | File Templates.
 */
interface ItemsService
{
    /**
     * @abstract
     * @param string $itemId
     * @return \MB\I\ItemInterface
     */
    public function getItem($itemId);

    /**
     * @abstract
     * @return array
     */
    public function getAllItems();
}
