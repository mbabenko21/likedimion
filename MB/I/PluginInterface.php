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
     * @return void
     */
    public function action();
}
