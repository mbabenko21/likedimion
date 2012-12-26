<?php
namespace MB\Core\Kernel;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 14:49
 */
class Errors
{
    public static function handler($errno, $errstr, $errfile, $errline, $errcontext)
    {
        $data = array(
            "errno" => $errno,
            "message" => $errstr,
            "file" => $errfile,
            "line" => $errline
        );

        \MB\View::make("errors/errors.tpl", $data);
        exit;
    }

    public static function exceptions(\Exception $e)
    {
        \MB\View::make("errors/exceptions.tpl", array("e" => $e));
        exit;
    }
}
