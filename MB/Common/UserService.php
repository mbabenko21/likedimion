<?php
namespace MB\Common;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 21:03
 */
use MB\Glor\User;

interface UserService
{
    /**
     * @abstract
     * @param int $id
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findById($id);

    /**
     * @abstract
     * @param string $cookId
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByCookId($cookId);

    /**
     * @abstract
     * @param string $login
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByLogin($login);

    /**
     * @abstract
     * @param string $email
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByEmail($email);

    /**
     * @abstract
     * @param string $password
     * @return string
     */
    public function hashPassword($password);

    /**
     * Проверка пароля
     * @abstract
     * @param \MB\Glor\User $user
     * @param               $password
     * @return bool
     */
    public function hasPassword(User $user, $password);

    /**
     * Добавить объект на сохранение
     * @abstract
     * @param \MB\Glor\User $user
     * @return void
     */
    public function persist(User $user);

    /**
     * Удалить пользователя
     * @abstract
     * @param \MB\Glor\User $user
     * @return void
     */
    public function remove(User $user);

    /**
     * Применить изменения в базе
     * @abstract
     * @return void
     */
    public function commit();
}
