<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 18:23
 */

namespace MB\Glor\Npc;
use MB\Glor\NpcBattleOptions;
use MB\Helper\Column\Description;
use MB\Helper\Column\Id;
use MB\Helper\Column\Name;

/**
 * Class BaseNpc
 * @package MB\Glor\Npc
 *
 * @Entity
 * @Table(name="base_npc")
 * @InheritanceType("SINGLE_TABLE")
 * @Discriminator
 * @DiscriminatorMap({
 *  "criminal" = "Criminal",
 * })
 */
abstract class BaseNpc {
    const CRIMINAL = "criminal";
    const ANIMAL = "animal";
    const PEOPLE = "people";
    use Id, Name, Description;

    /**
     * @var int
     * @Column(name="subtype", type="integer")
     */
    protected $subType;
    /**
     * @var NpcBattleOptions
     * @OneToOne(targetEntity="MB\Glor\NpcBattleOptions")
     * @JoinColumn(name="battle_options_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $battleOptions;

    abstract public function getType();

    /**
     * @return int
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param int $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * @return \MB\Glor\NpcBattleOptions
     */
    public function getBattleOptions()
    {
        return $this->battleOptions;
    }

    /**
     * @param \MB\Glor\NpcBattleOptions $battleOptions
     */
    public function setBattleOptions($battleOptions)
    {
        $this->battleOptions = $battleOptions;
        $battleOptions->setObject($this);
    }
} 