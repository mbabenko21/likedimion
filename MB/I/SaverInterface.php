<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 1:03
 */
interface SaverInterface
{

    /**
     * Сохранение данных
     * @abstract
     * @param LoaderInterface $loader
     * @return void
     */
    public function save(LoaderInterface $loader);
}
