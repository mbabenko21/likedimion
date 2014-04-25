<?php
namespace MB\Helper;

use Gobie\Regex\Wrappers\Mb\MbRegex;
use Gobie\Regex\Wrappers\Pcre\PcreRegex;
use MB\Container;
use MB\Exception\RuntimeException;
use MB\Loader\FileLoader;
use MB\Loader\Providers\ConstantsYamlLoader;

/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:26
 * To change this template use File | Settings | File Templates.
 */
class StrHelper
{
    const CONSTANTA_EX = "/({%)(constant|const)([:_#])([^(%})]+)(%})/";
    const FORMULA_EX = "/({%)(formula|form|f|fm)(\d)?([:_#])([^(%})]+)(%})/";
    const FIELD_EX = "/{%(replace|rep)([:#])([^%}]+)%}/";
    const PHP_TAG_EX = "/{php}(.*){\/php}/";
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

    public static function replacePHPTag($string)
    {
        $string = preg_replace_callback(static::PHP_TAG_EX, array('MB\Helper\StrHelper', 'replacePHP'), $string);
        return $string;
    }

    public static function replaceFormula($string)
    {
        preg_match_all("/({%|\[)(formula|form|f|fm)(\d)?([:_#])([^(%})]+)(%}|\])/", $string, $matches);
        $string = preg_replace_callback(static::FORMULA_EX, array('MB\Helper\StrHelper', 'getFormula'), $string);
        return $string;
    }

    public static function replaceConstant($string){
        $string = preg_replace_callback(static::CONSTANTA_EX, array('MB\Helper\StrHelper', 'getConst'), $string);
        return $string;
    }

    public static function replaceField($string, $fields)
    {
        $string = preg_replace_callback(static::FIELD_EX, function ($matches) use ($fields) {
           $id = $matches[3];
            if (isset($fields[$id])) {
                return $fields[$id];
            }
            return $id;
        }, $string);
        return $string;
    }

    protected static function replacePHP($text)
    {
        $text = eval($text[1]);
        return $text;
    }

    protected static function getFormula($text)
    {
        $formuls = require ROOT_DIR . "/Resources/config/formuls.php";
        $id = explode(".", trim($text[5]));
        $section = $id[0];
        $line = $id[1];
        if (!isset($formuls[$section][$line])) {
            throw new RuntimeException("Formula " . $text[5] . " not exists");
        }
        return $formuls[$section][$line];
    }

    protected static function getConst($matches){
        /** @var $loader FileLoader */
        $loader = Container::get("constants_loader");
        $loader->load("constants");
        $data = $loader->get();
        if(isset($data[$matches[4]])){
            return $data[$matches[4]];
        } else {
            return 0;
        }
    }

}
