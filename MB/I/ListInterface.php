<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 17:41
 */
interface ListInterface
{
    public function add($element);
    public function exists($element);
    public function remove($element);
}
