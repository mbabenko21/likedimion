<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:37
     */
/**
 * @Entity
 */
class DarkHealer extends DarkRace
{

    /**
     * @return string
     */
    public function getClass()
    {
        return self::DarkHealer;
    }
}
