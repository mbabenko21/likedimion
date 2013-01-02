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

    /**
     * @static
     * @param string $str
     * @return string
     */
    public static function utfBadstrip($str)
    {
        $ret = '';
        for ($i = 0; $i < strlen($str);) {
            $tmp = $str{$i++};
            $ch = ord($tmp);
            if ($ch > 0x7F) {
                if ($ch < 0xC0) continue;
                elseif ($ch < 0xE0) $di = 1;
                elseif ($ch < 0xF0) $di = 2;
                elseif ($ch < 0xF8) $di = 3;
                elseif ($ch < 0xFC) $di = 4;
                elseif ($ch < 0xFE) $di = 5;
                else continue;

                for ($j = 0; $j < $di; $j++) {
                    $tmp .= $ch = $str{$i + $j};
                    $ch = ord($ch);
                    if ($ch < 0x80 || $ch > 0xBF) continue 2;
                }
                $i += $di;
            }
            $ret .= $tmp;

        }
        return $ret;
    }

    public static function CP1251toUTF8($string)
    {
        $out = '';
        for ($i = 0; $i < strlen($string); ++$i) {
            $ch = ord($string{$i});
            if ($ch < 0x80) $out .= chr($ch);
            else
                if ($ch >= 0xC0)
                    if ($ch < 0xF0)
                        $out .= "\xD0" . chr(0x90 + $ch - 0xC0); // &#1040;-&#1071;, &#1072;-&#1087; (A-YA, a-p)
                    else $out .= "\xD1" . chr(0x80 + $ch - 0xF0); // &#1088;-&#1103; (r-ya)
                else
                    switch ($ch) {
                        case 0xA8:
                            $out .= "\xD0\x81";
                            break; // YO
                        case 0xB8:
                            $out .= "\xD1\x91";
                            break; // yo
                        // ukrainian
                        case 0xA1:
                            $out .= "\xD0\x8E";
                            break; // &#1038; (U)
                        case 0xA2:
                            $out .= "\xD1\x9E";
                            break; // &#1118; (u)
                        case 0xAA:
                            $out .= "\xD0\x84";
                            break; // &#1028; (e)
                        case 0xAF:
                            $out .= "\xD0\x87";
                            break; // &#1031; (I..)
                        case 0xB2:
                            $out .= "\xD0\x86";
                            break; // I (I)
                        case 0xB3:
                            $out .= "\xD1\x96";
                            break; // i (i)
                        case 0xBA:
                            $out .= "\xD1\x94";
                            break; // &#1108; (e)
                        case 0xBF:
                            $out .= "\xD1\x97";
                            break; // &#1111; (i..)
                        // chuvashian
                        case 0x8C:
                            $out .= "\xD3\x90";
                            break; // &#1232; (A)
                        case 0x8D:
                            $out .= "\xD3\x96";
                            break; // &#1238; (E)
                        case 0x8E:
                            $out .= "\xD2\xAA";
                            break; // &#1194; (SCH)
                        case 0x8F:
                            $out .= "\xD3\xB2";
                            break; // &#1266; (U)
                        case 0x9C:
                            $out .= "\xD3\x91";
                            break; // &#1233; (a)
                        case 0x9D:
                            $out .= "\xD3\x97";
                            break; // &#1239; (e)
                        case 0x9E:
                            $out .= "\xD2\xAB";
                            break; // &#1195; (sch)
                        case 0x9F:
                            $out .= "\xD3\xB3";
                            break; // &#1267; (u)
                    }
        }
        return $out;
    }

    /**
     * @static
     * @param string $message* @internal param string $msg
     * @return mixed|string
     */
    public static function bbCode($message)
    {
        $message = preg_replace('#\[big\](.*?)\[/big\]#si', '<big>\1</big>', $message);
        $message = preg_replace('#\[b\](.*?)\[/b\]#si', '<b>\1</b>', $message);
        $message = preg_replace('#\[i\](.*?)\[/i\]#si', '<i>\1</i>', $message);
        $message = preg_replace('#\[u\](.*?)\[/u\]#si', '<u>\1</u>', $message);
        $message = preg_replace('#\[small\](.*?)\[/small\]#si', '<small>\1</small>', $message);
        $message = preg_replace('#\[red\](.*?)\[/red\]#si', '<span style="color:#ff0000">\1</span>', $message);
        $message = preg_replace('#\[green\](.*?)\[/green\]#si', '<span style="color:#00ff00">\1</span>', $message);
        $message = preg_replace('#\[blue\](.*?)\[/blue\]#si', '<span style="color:#0000ff">\1</span>', $message);
        $message = preg_replace('#\[yellow\](.*?)\[/yellow\]#si', '<span style="color:#ffff00">\1</span>', $message);
        $message = preg_replace('#\[q\](.*?)\[/q\]#si', '<q>\1</q>', $message);
        $message = preg_replace('#\[del\](.*?)\[/del\]#si', '<del>\1</del>', $message);
        $message = preg_replace_callback('~\\[url=(.+?)\\](.+?)\\[/url\\]|(http://(www.)?[0-9a-z\.-]+\.[0-9a-z]{2,6}[0-9a-zA-Z/\?\.\~&amp;_=/%-:#]*)~', array(__CLASS__, 'urlReplace'), $message);
        return $message;
    }

    public static function urlReplace($m)
    {
        if (!isset($m[3])) {
            return '<a href="' . $m[1] . '">' . $m[2] . '</a>';
        } else {
            return '<a href="' . $m[3] . '">' . $m[3] . '</a>';
        }
    }
}
