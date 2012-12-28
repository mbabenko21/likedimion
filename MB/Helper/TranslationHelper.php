<?php
namespace MB\Helper;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 1:17
 */
use MB\Glor\Char\AbstractChar;
use MB\Lang;

class TranslationHelper
{
    /**
     * @static
     * @param \MB\Glor\Char\AbstractChar $char
     * @return string
     */
    public static function translateCharClass(AbstractChar $char)
    {
        return Lang::line("classes", $char->getClass());
    }
}
