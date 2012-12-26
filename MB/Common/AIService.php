<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 18:22
 */
interface AIService
{
    /**
     * Обработка локации
     * @abstract
     * @param string $locId
     * @return void
     */
    public function ai($locId);
}
