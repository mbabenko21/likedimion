<?php
namespace MB\Helper;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 13:38
 * To change this template use File | Settings | File Templates.
 */
class FileSystem
{
    /**
     * @static
     * @param $file
     * @return string
     */
    public static function getPerms($file)
    {
        return substr(sprintf('%o', fileperms($file)), -4);
    }

    /**
     * @static
     * @param string $file
     * @param int $mode
     * @return bool
     */
    public static function setPerms($file, $mode)
    {
        return chmod($file, $mode);
    }
}
