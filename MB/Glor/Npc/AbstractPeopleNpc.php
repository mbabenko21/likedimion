<?php
namespace MB\Glor\Npc;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 21.12.12
 * Time: 10:20
 * To change this template use File | Settings | File Templates.
 */
use MB\Glor\Params\Journal;
use MB\Glor\Params\TalantsSkills;
use MB\I\ExportableInterface;
use MB\Glor\Params\Equip;
use MB\Glor\Params\WarSkills;
use MB\Glor\Params\ProffSkills;

class AbstractPeopleNpc extends AbstractNpc
{
    /**
     * @var array
     * @Column(name="proff_skills", type="array")
     */
    protected $proffSkills = array();


    /**
     * @var array
     * @Column(name="bank", type="array")
     */
    protected $bank = array();

    /**
     * @var array
     * @Column(name="equip", type="array")
     */
    protected $equip = array();
    /**
     * @var array
     * @Column(name="journal", type="array")
     */
    protected $journal = array();
    /**
     * @return \MB\Glor\Params\ProffSkills
     */
    public function getProffSkills()
    {
        return new ProffSkills($this->proffSkills);
    }

    /**
     * @param ExportableInterface $proffSkills
     */
    public function setProffSkills(ExportableInterface $proffSkills)
    {
        $this->proffSkills = $proffSkills->export();
    }

    /**
     * @return array
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param array $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return Equip
     */
    public function getEquip()
    {
        return new Equip($this->equip);
    }

    /**
     * @param ExportableInterface $equip
     */
    public function setEquip(ExportableInterface $equip)
    {
        $this->equip = $equip->export();
    }

    /**
     * @return Journal
     */
    public function getJournal()
    {
        return new Journal($this->journal);
    }

    /**
     * @param \MB\I\ExportableInterface $journal
     */
    public function setJournal(ExportableInterface $journal)
    {
        $this->journal = $journal->export();
    }


}
