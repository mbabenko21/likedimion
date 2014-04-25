<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 22.04.14
 * Time: 0:32
 */

namespace MB\Services;


use Doctrine\Common\Collections\ArrayCollection;
use MB\Common\SkillsService;
use MB\Exception\SkillException;
use MB\Helper\SkillHelper;
use MB\I\LoaderInterface;

class SkillsServiceImpl implements SkillsService {
    /** @var  LoaderInterface */
    protected $skillsLoader;
    /**
     * @param $school
     * @return ArrayCollection
     */
    public function getSchool($school)
    {
        $k =1;
        $this->skillsLoader->load($school);
        $data = $this->skillsLoader->get();
        $dataForCollection = array();
        foreach($data as $key => $value){
            $dataForCollection[$key] = new SkillHelper($value, $key);
        }
        $collection = new ArrayCollection($dataForCollection);
        return $collection;
    }

    /**
     * @param \MB\I\LoaderInterface $skillsLoader
     */
    public function setSkillsLoader($skillsLoader)
    {
        $this->skillsLoader = $skillsLoader;
    }

    /**
     * @param $id
     * @throws \MB\Exception\SkillException
     * @return SkillHelper
     */
    public function findSkillByID($id)
    {
        $this->skillsLoader->load($this->getSchoolFromID($id));
        $data = $this->skillsLoader->get();
        if(isset($data[$id])){
            $skill = new SkillHelper($data[$id], $id);
        } else {
            throw new SkillException("Skill ".$id." not found");
        }
        return $skill;
    }

    private function getSchoolFromID($id){
        $school = "";
        if(preg_match("/earth/", $id)){
            $school = self::EARTHSCHOOL;
        } elseif(preg_match("/fire/", $id)) {
            $school = self::FIRESCHOOL;
        } elseif(preg_match("/cold/", $id)){
            $school = self::COLDSCHOOL;
        } elseif(preg_match("/passive/", $id)){
            $school = self::PASSIVESCHOOL;
        }
        return $school;
    }
}