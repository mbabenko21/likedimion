<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 20:34
 */
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use MB\Glor\Char\LightWarrior;
use MB\Glor\Char\LightSniper;
use MB\Glor\Char\LightHealer;
use MB\Glor\Char\DarkWarrior;
use MB\Glor\Char\DarkSniper;
use MB\Glor\Char\DarkHealer;
use MB\Glor\Char\AbstractChar;
use MB\Common\CharService;

class CharServiceImpl implements CharService
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
     * @param string $repositoryClass
     */
    public function setRepository($repositoryClass)
    {
        $this->repository = $this->entityManager->getRepository($repositoryClass);
    }

    /**
     * Получить новый экземпляр класса
     * @param string $class
     * @throws \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
     * @return \MB\Glor\Char\AbstractChar
     */
    public function getNewInstance($class)
    {
        switch ($class) {
            case AbstractChar::DarkHealer:
                $char = new DarkHealer();
                break;
            case AbstractChar::DarkSniper:
                $char = new DarkSniper();
                break;
            case AbstractChar::DarkWarrior:
                $char = new DarkWarrior();
                break;
            case AbstractChar::LightHealer:
                $char = new LightHealer();
                break;
            case AbstractChar::LightSniper:
                $char = new LightSniper();
                break;
            case AbstractChar::LightWarrior:
                $char = new LightWarrior();
                break;
            default:
                throw new InvalidArgumentException("Undefined class");
                break;
        }
        return $char;
    }

    /**
     * @param string $name
     * @return \MB\Glor\Char\AbstractChar
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    public function findByName($name)
    {
        return $this->charResolve(array("name" => $name));
    }

    /**
     * @param array $criteria
     * @return AbstractChar
     * @throws \Doctrine\ORM\EntityNotFoundException
     */
    private function charResolve(array $criteria)
    {
        $char = $this->repository->findOneBy($criteria);
        if (false === $char instanceof AbstractChar) {
            throw new EntityNotFoundException();
        }
        return $char;
    }

    /**
     * Добавить в очередь на сохранение
     * @param \MB\Glor\Char\AbstractChar $char
     * @return void
     */
    public function persist(AbstractChar $char)
    {
        $this->entityManager->persist($char);
    }

    /**
     * Добавить в очередь на удаление
     * @param \MB\Glor\Char\AbstractChar $char
     * @return void
     */
    public function remove(AbstractChar $char)
    {
        $this->entityManager->remove($char);
    }

    /**
     * Применение данных в базе
     * @return void
     */
    public function commit()
    {
        $this->entityManager->flush();
    }

    /**
     * @param int $id
     * @throws \Doctrine\ORM\EntityNotFoundException
     * @return AbstractChar
     */
    public function findById($id)
    {
        $char = $this->repository->find($id);
        if($char instanceof AbstractChar === false){
            throw new EntityNotFoundException();
        }
        return $char;
    }
}
