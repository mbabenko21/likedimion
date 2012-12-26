<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:40
     */
/**
 * @Entity
 */
class LightSniper extends LightRace
{

    /**
     * @return string
     */
    public function getClass()
    {
        return self::LightSniper;
    }
}
