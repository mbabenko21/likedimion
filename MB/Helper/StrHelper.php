<?php
namespace MB\Helper;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:26
 * To change this template use File | Settings | File Templates.
 */
class StrHelper
{
    /**
     * Converts 'table_name' to 'TableName'
     * @static
     * @param string $word
     * @return string
     */
    public static function classify($word)
    {
        return str_replace(" ", "", ucwords(strtr($word, "_-", "  ")));
    }

    /**
     * TableName -> table_name
     * @static
     * @param string $word
     * @return string
     */
    public static function tableize($word)
    {
        return strtolower(preg_replace('~(?<=\\w)([A-Z])~', '_$1', $word));
    }
}
