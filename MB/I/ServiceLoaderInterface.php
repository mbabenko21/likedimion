<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 10:03
 */
interface ServiceLoaderInterface
{

    /**
     * @abstract
     * @return string
     */
    public function getInstance();

    /**
     * @abstract
     * @return array
     */
    public function getArguments();

    /**
     * @abstract
     * @return array
     */
    public function getAutoCalls();

    /**
     * @abstract
     * @return string
     */
    public function getName();
}
