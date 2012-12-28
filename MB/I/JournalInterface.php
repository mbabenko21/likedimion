<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:15
 */
interface JournalInterface
{
    /**
     * @abstract
     * @return \MB\Glor\Post
     */
    public function getPost();

    /**
     * @abstract
     * @return \DateTime
     */
    public function getCreated();

    /**
     * @abstract
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getChar();

    /**
     * @abstract
     * @return int
     */
    public function getType();
}
