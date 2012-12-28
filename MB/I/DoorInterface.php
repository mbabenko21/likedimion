<?php
namespace MB\I;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 13:01
 */
interface DoorInterface
{
    const NORD = "n";
    const SOUTH = "s";
    const WEST = "w";
    const EAST = "e";
    const NORD_WEST = "nw";
    const NORD_EAST = "ne";
    const SOUTH_WEST = "sw";
    const SOUTH_EAST = "se";
    /**
     * @internal param $doorId
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getTargetLocation();

    /**
     * @abstract
     * @return string
     */
    public function getDirection();
}
