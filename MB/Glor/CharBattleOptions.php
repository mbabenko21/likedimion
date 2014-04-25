<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 17:53
 */

namespace MB\Glor;
use MB\Glor\Char\AbstractChar;

/**
 * Class CharBattleOptions
 * @package MB\Glor
 *
 * @Entity
 */
class CharBattleOptions extends BattleOptions {
    /**
     * @var AbstractChar
     * @OneToOne(targetEntity="MB\Glor\Char\AbstractChar")
     * @JoinColumn(name="object_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $object;
    /**
     * @return object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $object
     */
    public function setObject($object)
    {
        $this->object = $object;
        $object->setBattleOptions($this);
    }
}