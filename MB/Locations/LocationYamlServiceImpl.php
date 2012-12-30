<?php
namespace MB\Locations;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 16:34
 */
use MB\Common\LocationService;
use MB\Glor\Locations\NpcList;
use Doctrine\ORM\EntityNotFoundException;
use MB\Glor\Locations\CharList;
use Doctrine\ORM\EntityManager;
use MB\I\SaverInterface;
use MB\I\ExportableInterface;
use MB\Locations\Location;
use MB\I\LocationInterface;
use MB\I\LoaderInterface;

class LocationYamlServiceImpl implements LocationService
{
    /** @var LoaderInterface */
    protected $loader;
    /** @var \MB\I\SaverInterface */
    protected $saver;
    /** @var EntityManager */
    protected $entityManager;
    /** @var \Doctrine\ORM\EntityRepository */
    protected $charListRepository;
    /** @var \Doctrine\ORM\EntityRepository */
    protected $npcListRepository;


    public function __construct(LoaderInterface $loader, EntityManager $entityManager)
    {
        $this->loader = $loader;
        $this->entityManager = $entityManager;
    }

    /**
     * @param $locId
     * @return \MB\I\LocationInterface
     */
    public function getLocation($locId)
    {
        $this->loader->load($locId);
        $location = $this->loader->get();
        return new Location($location);
    }

    /**
     * @param \MB\I\LocationInterface $location
     * @return void
     */
    public function persist(LocationInterface $location)
    {
        $this->loader->update($location->export());
    }

    public function commit()
    {
        $this->saver->save($this->loader);
    }

    /**
     * @param \MB\I\SaverInterface $saver
     */
    public function setSaver(SaverInterface $saver)
    {
        $this->saver = $saver;
    }

    /**
     * @param string $locId
     * @return CharList
     */
    public function charListInstance($locId)
    {
        $charList = $this->findCharList($locId);
        return $charList;
    }

    /**
     * @param $locId
     * @return \MB\Glor\Locations\CharList|object
     */
    protected function findCharList($locId)
    {
        /** @var $charList \MB\Glor\Locations\CharList */
        $charList = $this->charListRepository->findOneBy(array("locId" => $locId));
        if ($charList instanceof CharList === false) {
            $charList = new CharList();
            $charList->setLocId($locId);
            $this->entityManager->persist($charList);
            $this->entityManager->flush();
        }
        return $charList;
    }

    /**
     * @param \Doctrine\ORM\EntityRepository $charListRepository
     */
    public function setCharListRepository($charListRepository)
    {
        $this->charListRepository = $this->entityManager->getRepository($charListRepository);
    }

    /**
     * @return void
     */
    public function importLists()
    {
        foreach (func_get_args() as $charList) {
            $this->entityManager->persist($charList);
        }
        $this->entityManager->flush();
    }

    /**
     * @param $locId
     * @return NpcList
     */
    public function npcListInstance($locId)
    {
        /** @var $npcList NpcList */
        $npcList = $this->npcListRepository->findOneBy(array("locId" => $locId));
        if($npcList instanceof NpcList === false){
            $location = $this->getLocation($locId);
            $npcList = $location->getStaticNpcList();
            $npcList->setLocId($locId);
            $this->importLists($npcList);
        }
        return $npcList;
    }

    /**
     * @param string $npcListRepository
     */
    public function setNpcListRepository($npcListRepository)
    {
        $this->npcListRepository = $this->entityManager->getRepository($npcListRepository);
    }
}
