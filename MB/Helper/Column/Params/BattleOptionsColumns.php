<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 16:43
 */

namespace MB\Helper\Column\Params;


trait BattleOptionsColumns {
    /**
     * @var int
     * @Column(name="hit", type="integer")
     */
    protected $hit;
    /**
     * @var int
     * @Column(name="mag_hit", type="integer")
     */
    protected $magHit;
    /**
     * @var int
     * @Column(name="attack", type="integer")
     */
    protected $attack;
    /**
     * @var int
     * @Column(name="mag_boost", type="integer")
     */
    protected $magBoost;
    /**
     * @var int
     * @Column(name="bias", type="integer")
     */
    protected $bias;
    /**
     * @var int
     * @Column(name="parring", type="integer")
     */
    protected $parring;
    /**
     * @var int
     * @Column(name="def", type="integer")
     */
    protected $def;
    /**
     * @var int
     * @Column(name="mag_def", type="integer")
     */
    protected $magDef;
    /**
     * @var int
     * @Column(name="shield_block", type="integer")
     */
    protected $shieldBlock;

    /**
     * @return int
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * @param int $hit
     */
    public function setHit($hit)
    {
        $this->hit = $hit;
    }

    /**
     * @return int
     */
    public function getMagHit()
    {
        return $this->magHit;
    }

    /**
     * @param int $magHit
     */
    public function setMagHit($magHit)
    {
        $this->magHit = $magHit;
    }

    /**
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param int $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return int
     */
    public function getMagBoost()
    {
        return $this->magBoost;
    }

    /**
     * @param int $magBoost
     */
    public function setMagBoost($magBoost)
    {
        $this->magBoost = $magBoost;
    }

    /**
     * @return int
     */
    public function getBias()
    {
        return $this->bias;
    }

    /**
     * @param int $bias
     */
    public function setBias($bias)
    {
        $this->bias = $bias;
    }

    /**
     * @return int
     */
    public function getParring()
    {
        return $this->parring;
    }

    /**
     * @param int $parring
     */
    public function setParring($parring)
    {
        $this->parring = $parring;
    }

    /**
     * @return int
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * @param int $def
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

    /**
     * @return int
     */
    public function getMagDef()
    {
        return $this->magDef;
    }

    /**
     * @param int $magDef
     */
    public function setMagDef($magDef)
    {
        $this->magDef = $magDef;
    }

    /**
     * @return int
     */
    public function getShieldBlock()
    {
        return $this->shieldBlock;
    }

    /**
     * @param int $shieldBlock
     */
    public function setShieldBlock($shieldBlock)
    {
        $this->shieldBlock = $shieldBlock;
    }
} 