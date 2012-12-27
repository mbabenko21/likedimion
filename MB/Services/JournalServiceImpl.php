<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 20:47
 */
use MB\Common\JournalService;
use MB\Helper\DateHelper;
use MB\Configurations\ApplicationConfiguration;
use MB\I\LocationInterface;
use MB\Common\LocationService;
use Doctrine\Common\Persistence\ObjectManager;
use MB\I\JournalInterface;
use MB\Glor\Char\AbstractChar;

class JournalServiceImpl implements JournalService
{
    /** @var \Doctrine\ORM\EntityManager */
    protected $entityManager;
    /** @var \Doctrine\ORM\EntityRepository */
    protected $repository;
    /** @var \MB\Configurations\ApplicationConfiguration */
    protected $appConfig;

    public function __construct(ObjectManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Получение игрового журнала для персонажа
     * Выдать сообщения, адресованные всем, и только ему
     * @param \MB\I\LocationInterface $location
     * @param int $limit
     * @param int $offset
     * @internal param \MB\Glor\Char\AbstractChar $char
     * @internal param int $count_messages
     * @return array
     */
    public function getLocJournal(LocationInterface $location, $limit = 10, $offset = 0)
    {
        $criteria = array(
            "location" => $location,
            "type" => self::JOURNAL_PUBLIC
        );
        return $this->repository->findBy($criteria, array("created" => "desc"), $limit, $offset);
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $char
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function getCharJournal(AbstractChar $char, $limit = 10, $offset = 0)
    {
        $criteria = array(
            "char" => $char,
            "type" => self::JOURNAL_PRIVATE
        );
        return $this->repository->findBy($criteria, array("created" => "desc"), $limit, $offset);
    }

    /**
     * @return void
     */
    public function clearJournal()
    {
        $timeout = $this->appConfig->getJournalMessageLeave();
        $dql = 'DELETE FROM MB\Glor\Forum\Journal j WHERE j.created < ?1';
        $query = $this->entityManager->createQuery($dql);
        $date = DateHelper::createFromTimeStamp(time()-$timeout);
        $query->setParameter(1, $date);
        $query->execute();
        $dql = 'DELETE FROM MB\Glor\Post p WHERE p.postDate < ?1 AND p.trash = 1';
        $query = $this->entityManager->createQuery($dql);
        $date = DateHelper::createFromTimeStamp(time()-$timeout);
        $query->setParameter(1, $date);
        $query->execute();
    }

    /**
     * @param \MB\I\JournalInterface $journal
     * @return void
     */
    public function add(JournalInterface $journal)
    {
        $this->entityManager->persist($journal);
        $this->entityManager->flush();
    }

    /**
     * @param $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $this->entityManager->getRepository($repository);
    }

    /**
     * @param \MB\Configurations\ApplicationConfiguration $appConfig
     */
    public function setAppConfig(ApplicationConfiguration $appConfig)
    {
        $this->appConfig = $appConfig;
    }
}
