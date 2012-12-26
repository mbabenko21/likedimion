<?php
namespace MB\Glor\Char;

/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 0:05
 */

use MB\Glor\AbstractAutoIncrementObject;
use MB\Glor\Location\Location;
use MB\Glor\Npc\AbstractPeopleNpc;
use MB\Helper\DateHelper;
use MB\Glor\Params\CharStatistic;
use MB\Glor\Params\CharParams;
use MB\Glor\Params\BaseParams;
use MB\Glor\Params\WarParams;
use MB\Glor\Params\AbstractList;
use MB\I\ExportableInterface;
use MB\Glor\User;

/**
 * @Entity
 * @Table(name="chars")
 * @InheritanceType("SINGLE_TABLE")
 * @Discriminator
 * @DiscriminatorMap({
 * "dh" = "DarkHealer",
 * "dw" = "DarkWarrior",
 * "ds" = "DarkSniper",
 * "lh" = "LightHealer",
 * "lw" = "LightWarrior",
 * "ls" = "LightSniper"
 * })
 */
abstract class AbstractChar extends AbstractPeopleNpc
{
    const DarkRace = "-";
    const LightRace = "+";
    const DarkWarrior = "dw";
    const DarkHealer = "dh";
    const DarkSniper = "ds";
    const LightWarrior = "lw";
    const LightHealer = "lh";
    const LightSniper = "ls";
    /**
     * @var string
     * @Column(type="string", length=32)
     */
    protected $name;
    /**
     * @var string
     * @Column(name="race", type="string")
     */
    protected $race;
    /**
     * @var \MB\Glor\User
     * @OneToOne(targetEntity="\MB\Glor\User")
     * @JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $user;
    /**
     * @var int
     * @Column(type="integer")
     */
    protected $level;
    /**
     * @var int
     * @Column(name="expirience", type="integer")
     */
    protected $exp;
    /**
     * @var int
     * @Column(name="study_points", type="integer")
     */
    protected $studyPoints;

    /**
     * @var array
     * @Column(name="statistic", type="array")
     */
    protected $statistic = array();
    /**
     * @var \Datetime
     * @Column(name="created", type="datetime")
     */
    protected $created;

    public function __construct()
    {
        $this->race = $this->getRace();
        $this->setCreated(DateHelper::createDate());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    abstract public function getRace();

    /**
     * @return \MB\Glor\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param MB\Glor\User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param int $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param int $exp
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
    }

    /**
     * @return int
     */
    public function getStudyPoints()
    {
        return $this->studyPoints;
    }

    /**
     * @param int $studyPoints
     */
    public function setStudyPoints($studyPoints)
    {
        $this->studyPoints = $studyPoints;
    }


    /**
     * @return CharStatistic
     */
    public function getStatistic()
    {
        return new CharStatistic($this->statistic);
    }

    /**
     * @param ExportableInterface $statistic
     */
    public function setStatistic(ExportableInterface $statistic)
    {
        $this->statistic = $statistic->export();
    }

    /**
     * @return \Datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \Datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    abstract public function getClass();

    public function __toString()
    {
        return $this->getId();
    }

    /**
     * @param int $exp
     */
    public function addExp($exp)
    {
        $charParams = $this->getCharParams();
        /** @var $expTable \MB\I\ExpTableInterface */
        $expTable = \MB\Container::get("exp_table");

        $needExp = (int)$expTable->getLevel($this->getLevel() + 1)->getNeedExp();
        $charParams->expirience += $exp;
        if($charParams->expirience >= $needExp){
            $ost = $charParams->expirience - $needExp;
            $this->setLevel($this->getLevel() + 1);
            $charParams->studyPoints += $expTable->getLevel($this->getLevel())->getStudyPoints();
        }
        $this->setCharParams($charParams);
    }

    /**
     * @return float
     */
    public function getStatus()
    {
        return floor($this->getLevel() / 10);
    }
}
