<?php
namespace MB\Common;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 12:26
 * To change this template use File | Settings | File Templates.
 */
interface AuthService
{
    /**
     * @abstract
     * @param string $login
     * @param string $password
     * @param bool $remember
     * @return bool
     */
    public function login($login, $password, $remember = true);

    /**
     * @abstract
     * @return bool
     */
    public function hasLogged();

    /**
     * @abstract
     * @return \MB\Glor\User
     */
    public function getCurrentUser();

    /**
     * @abstract
     * @return bool
     */
    public function logout();
}
