<?php
namespace MB\I;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:06
 */
interface LoaderInterface
{

    /**
     * Загружает данные
     * @abstract
     * @param string $dataProvider
     * @return void
     */
    public function load($dataProvider);

    /**
     * Получает данные
     * @abstract
     * @return mixed
     */
    public function get();


    /**
     * Обновляет данные
     * @abstract
     * @param mixed $data
     * @return void
     */
    public function update($data);

    /**
     * @abstract
     * @return string
     */
    public function getProvider();
}
