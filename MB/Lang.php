<?php
namespace MB;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 0:05
 */
use MB\Loader\Providers\YamlLoader;

class Lang
{

    /**
     * @static
     * @param string $section
     * @internal param string $locale
     * @return array
     */
    public static function section($section)
    {
        $lang = Container::instance("lang");
        if (isset($lang[$section])) {
            return $lang[$section];
        } else {
            return array();
        }
    }

    public static function line($section, $line)
    {
        $lang = Container::instance("lang");
        if (isset($lang[$section][$line])) {
            return $lang[$section][$line];
        } else {
            return "";
        }
    }

    public static function load($locale)
    {
        $loader = new YamlLoader(ROOT_DIR . "/Resources/translations/" . $locale . ".yml");
        $configuration = new Configuration($loader);
        Container::register("lang", $configuration->getConfiguration());
    }
}
