<?php
namespace MB\Services;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 12:31
 * To change this template use File | Settings | File Templates.
 */
use MB\Common\AuthService;
use Doctrine\ORM\EntityNotFoundException;
use MB\Common\UserService;

class AuthServiceImpl implements AuthService
{
    /** @var \MB\Common\UserService */
    protected $userService;

    /**
     * @param string $login
     * @param string $password
     * @param bool $remember
     * @return bool|\MB\Glor\User
     */
    public function login($login, $password, $remember = true)
    {
        if (true === $this->hasLogged()) {
            return $this->getCurrentUser();
        }
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = \MB\Container::instance("app_config");
        try {
            $user = $this->userService->findByLogin($login);
            if ($this->userService->hasPassword($user, $password)) {
                $cookie = $user->getId() . ":" . $login . "_" . $password . "_" . time() . ":" . rand(0, 1000);
                if (true === $remember) {
                    $expire = time() + 31536000;
                } else {
                    $expire = 0;
                }
                setcookie($appConfig->getAppName(), md5($cookie), $expire, "/", "", 0);
                $user->setCookId(md5($cookie));
                $this->userService->persist($user);
                $this->userService->commit();
                $response = $user;
            } else {
                $response = false;
            }
        } catch (EntityNotFoundException $e) {
            $response = false;
        }
        return $response;
    }

    /**
     * @return bool
     */
    public function hasLogged()
    {
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = \MB\Container::instance("app_config");
        return isset($_COOKIE[$appConfig->getAppName()]);
    }

    /**
     * @throws \Doctrine\ORM\EntityNotFoundException
     * @return \MB\Glor\User
     */
    public function getCurrentUser()
    {
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = \MB\Container::instance("app_config");
        try {
            $user = $this->userService->findByCookId($_COOKIE[$appConfig->getAppName()]);
        } catch (EntityNotFoundException $e) {
            throw $e;
        }
        return $user;
    }

    /**
     * @return bool
     */
    public function logout()
    {
        /** @var $appConfig \MB\Configurations\ApplicationConfiguration */
        $appConfig = \MB\Container::instance("app_config");
        setcookie($appConfig->getAppName(), "", time() - 100000, "/", "", 0);
        return true;
    }

    /**
     * @param \MB\Common\UserService $userService
     */
    public function setUserService(UserService $userService)
    {
        $this->userService = $userService;
    }
}
