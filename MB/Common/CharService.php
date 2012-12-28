<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:26
 */
use MB\Glor\Char\AbstractChar;

interface CharService
{

    /**
     * Получить новый экземпляр класса
     * @abstract
     * @param string $class
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getNewInstance($class);

    /**
     * @abstract
     * @param string $name
     * @return \MB\Glor\Char\AbstractChar
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByName($name);

    /**
     * @abstract
     * @param int $id
     * @return AbstractChar
     */
    public function findById($id);

    /**
     * Добавить в очередь на сохранение
     * @abstract
     * @param \MB\Glor\Char\AbstractChar $char
     * @return void
     */
    public function persist(AbstractChar $char);

    /**
     * Добавить в очередь на удаление
     * @abstract
     * @param \MB\Glor\Char\AbstractChar $char
     * @return void
     */
    public function remove(AbstractChar $char);

    /**
     * Применение данных в базе
     * @abstract
     * @return void
     */
    public function commit();
}
