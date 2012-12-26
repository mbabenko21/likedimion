<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 20:33
 */
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityNotFoundException;
use MB\Glor\User;
use MB\Common\UserService;

class UserServiceImpl implements UserService
{
    /** @var \Doctrine\ORM\EntityManager */
    protected $entityManager;
    /** @var \Doctrine\ORM\EntityRepository */
    protected $repository;

    public function __construct(ObjectManager $entityManager)
    {
        $this->setEntityManager($entityManager);
    }

    /**
     * @param \Doctrine\ORM\EntityManager $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $this->entityManager->getRepository($repository);
    }

    /**
     * @abstract
     * @param int $id
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findById($id)
    {
        $user = $this->repository->find($id);
        if (FALSE === $user instanceof User) {
            throw new EntityNotFoundException();
        }
        return $user;
    }

    /**
     * @param string $cookId
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByCookId($cookId)
    {
        return $this->resolveUser(array("cookId" => $cookId));
    }

    /**
     * @param string $login
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByLogin($login)
    {
        return $this->resolveUser(array("login" => $login));
    }

    /**
     * @param string $email
     * @return \MB\Glor\User
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByEmail($email)
    {
        return $this->resolveUser(array("email" => $email));
    }

    /**
     * @param string $password
     * @return string
     */
    public function hashPassword($password)
    {
        return md5($password);
    }

    /**
     * Проверка пароля
     * @param \MB\Glor\User $user
     * @param               $password
     * @return bool
     */
    public function hasPassword(User $user, $password)
    {
        $password = $this->hashPassword($password);
        return ($user->getPassword() == $password);
    }

    /**
     * Добавить объект на сохранение
     * @param \MB\Glor\User $user
     * @return void
     */
    public function persist(User $user)
    {
        $this->entityManager->persist($user);
    }

    /**
     * Удалить пользователя
     * @param \MB\Glor\User $user
     * @return void
     */
    public function remove(User $user)
    {
        $this->entityManager->remove($user);
    }

    /**
     * Применить изменения в базе
     * @return void
     */
    public function commit()
    {
        $this->entityManager->flush();
    }

    /**
     * @param array $criteria
     * @return object
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    private function resolveUser(array $criteria)
    {
        $user = $this->repository->findOneBy($criteria);
        if (false === $user instanceof User) {
            throw new EntityNotFoundException();
        }
        return $user;
    }
}
