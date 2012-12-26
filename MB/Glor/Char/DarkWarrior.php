<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:36
     */
/**
 * @Entity
 */
class DarkWarrior extends DarkRace
{

    /**
     * @return string
     */
    public function getClass()
    {
        return self::DarkWarrior;
    }
}
