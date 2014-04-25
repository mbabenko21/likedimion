<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 22.04.14
 * Time: 0:19
 */

namespace MB\Helper;


use MB\Container;
use MB\Exception\SkillException;
use MB\Lang;

class SkillHelper {
    /** @var array  */
    protected $_skill;

    protected $id;

    const POINT = "point";
    const MINI_AOE = "mini_aoe";
    const AOE = "aoe";
    const PASSIVE = "passive";

    public function __construct(array $skill, $id){
        $this->_skill = $skill;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(){
        return isset($this->_skill["name"]) ? $this->_skill["name"] : "Unnamed skill";
    }

    public function getInfo(){
        if(isset($this->_skill["info"])){
            $text = StrHelper::replacePHPTag($this->_skill["info"]);
            $text = StrHelper::replaceFormula($this->_skill["info"]);
        } else {
            $text = Lang::line("helper", "no_info");
        }
        return $text;
    }

    public function getCoolDown() {
        if($this->getType() != self::PASSIVE){
            return isset($this->_skill["cooldown"]) ? $this->_skill["cooldown"] : 0;
        } else {
            return 0;
        }
    }

    public function getType(){
        if(!isset($this->_skill["type"])){
            throw new SkillException("No type for skill");
        } else {
            return $this->_skill["type"];
        }
    }

    public function getLevel(){
        $char = Container::get("auth_service")->getCurrentUser()->getChar();
        $talants = $char->getTalants();
        return $talants->{$this->id};
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getMP() {
        $mp = 0;
        if(isset($this->_skill["mp"])){
            $mp = StrHelper::replaceFormula($this->_skill["mp"]);
        }
        return $mp;
    }

    public function getClass() {
        $class = "";
        if(isset($this->_skill["class"])){
            $class = $this->_skill["class"];
        }
        return $class;
    }


} 