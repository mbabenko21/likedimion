<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 22:17
 */

namespace Tests;


use MB\Common\SkillsService;
use MB\Container;
use MB\Helper\SkillHelper;

class SkillsServiceImplTest extends \PHPUnit_Framework_TestCase {
    protected $school = "passiveschool";
    public function testDepedency() {
        /** @var $skillService SkillsService */
        $skillService = Container::get("skills_service");
        $this->assertInstanceOf('MB\Services\SkillsServiceImpl', $skillService);
        $this->assertInstanceOf('MB\Common\SkillsService', $skillService);
        $testSchool = $skillService->getSchool($this->school);
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $testSchool);

        /** @var $skill SkillHelper */
        foreach($testSchool as $skill){
            $this->assertInstanceOf('MB\Helper\SkillHelper', $skill);
            $this->assertInternalType('string', $skill->getName());
        }
    }
}
 