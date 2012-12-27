<?php
namespace MB\Helper;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 18:25
 * To change this template use File | Settings | File Templates.
 */
class DateHelper
{
    /**
     * @static
     * @param string $timeZone
     * @return \DateTime
     */
    public static function createDate($timeZone = "Europe/Moscow")
    {
        $timezone = new \DateTimeZone($timeZone);
        return new \DateTime('now', $timezone);
    }

    /**
     * @param $timestamp
     * @return \DateTime
     */
    public static function createFromTimeStamp($timestamp)
    {
        $datetime = new \DateTime();
        $datetime->setTimestamp($timestamp);
        return $datetime;
    }

    /**
     * Получение даты в нужном формате с учетом указаной локали
     * по умолчанию
     * format: %e %B (12 Дек)
     * locale: ru_RU.UTF8
     * @static
     * @param \DateTime $datetime
     * @param string $format
     * @param string $locale
     * @return string
     */
    public static function format(\DateTime $datetime, $format = "%#d %b", $locale = "ru_RU.UTF-8")
    {
        setlocale(LC_TIME, $locale);
        $strftime = strftime($format, $datetime->getTimestamp());
        return static::replaceDate($strftime);
    }

    protected static function replaceDate($str){
        $input =        array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", 'Aug', "Sep", "Okt", "Nov", "Dec");
        $replacement =  array("Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек");
        return str_replace($input, $replacement, $str);
    }
}
