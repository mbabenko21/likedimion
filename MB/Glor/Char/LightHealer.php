<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:39
     */
/**
 * @Entity
 */
class LightHealer extends LightRace
{

    /**
     * @return string
     */
    public function getClass()
    {
        return self::LightHealer;
    }
}
