<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 23:02
 */
interface ExpTableInterface
{
    /**
     * @abstract
     * @param int $level
     * @return \MB\ExpTable\Level
     */
    public function getLevel($level);
}
