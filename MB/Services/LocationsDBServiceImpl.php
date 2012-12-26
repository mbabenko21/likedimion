<?php
namespace MB\Services;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 19:39
 */
use MB\Locations\LocationYamlServiceImpl;
use MB\I\ExportableInterface;
use MB\Glor\Locations\LocationDB;
use MB\I\LocationInterface;

class LocationsDBServiceImpl extends LocationYamlServiceImpl
{
    /** @var \Doctrine\ORM\EntityRepository */
    protected $locationsRepository;

    /**
     * Ищем скомпилированую локацию, если не находим, ищем нескомпиленую, компилим
     * @param string $locId
     * @return \MB\I\LocationInterface|object
     */
    public function getLocation($locId){
        $location = $this->locationsRepository->findOneBy(array("id" => $locId));
        if($location instanceof LocationInterface){
            return $location;
        } else {
            $loc = parent::getLocation($locId);
            $location = new LocationDB();
            $location->setId($loc->getId());
            $location->setTerritory($loc->getTerritory());
            $location->setInfo($loc->getInfo());
            $location->setName($loc->getName());
            $location->setPart($loc->getPart());
            $doors = $loc->getDoors();
            $iDoors = array();
            foreach($doors as $door){
                if($door instanceof ExportableInterface){
                    $iDoors[] = $door->export();
                }
            }
            $location->setDoors($iDoors);
            $this->persist($location);
            $this->commit();
            return $location;
        }
    }

    /**
     * @param \Doctrine\ORM\EntityRepository $locationsRepository
     */
    public function setLocationsRepository($locationsRepository)
    {
        $this->locationsRepository = $this->entityManager->getRepository($locationsRepository);
    }

    public function persist(LocationInterface $location){
        $this->entityManager->persist($location);
    }

    public function commit(){
        $this->entityManager->flush();
    }
}
