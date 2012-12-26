<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 12:19
 */
interface PluginInterface
{
    /**
     * Запустить плагин
     * @abstract
     * @param $pluginId
     * @return void
     */
    public function run($pluginId);
}
