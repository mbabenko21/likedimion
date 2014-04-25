<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 22.04.14
 * Time: 0:18
 */

namespace MB\Common;


use Doctrine\Common\Collections\ArrayCollection;
use MB\Helper\SkillHelper;

interface SkillsService {
    const COLDSCHOOL = "coldschool";
    const FIRESCHOOL = "fireschool";
    const EARTHSCHOOL = "earthschool";
    const PASSIVESCHOOL = "passiveschool";
    /**
     * @param $school
     * @return ArrayCollection
     */
    public function getSchool($school);

    /**
     * @param $id
     * @return SkillHelper
     */
    public function findSkillByID($id);
} 