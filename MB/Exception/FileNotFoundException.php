<?php
namespace MB\Exception;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:09
 */
class FileNotFoundException extends RuntimeException
{
    public function __construct($file)
    {
        parent::__construct("File {$file} not found");
    }
}
