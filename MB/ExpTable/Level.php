<?php
namespace MB\ExpTable;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 22:49
 */
class Level
{
    /** @var array */
    protected $level;

    public function __construct(array $level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getStudyPoints()
    {
        return $this->level[0];
    }

    /**
     * @return int
     */
    public function getNeedExpToLevel(){
        return $this->level[2];
    }

    /**
     * @return int
     */
    public function getNeedExp()
    {
        return $this->level[3];
    }

    /**
     * @return int
     */
    public function getLevelCost()
    {
        return $this->level[4];
    }

    /**
     * @param int $exp
     * @param int $level
     * @param int $round
     * @return float|int
     */
    public function getExpPercent($exp, $level, $round = 2)
    {
        $need_exp = $this->getNeedExp($level);
        $exp_to_level = $this->getNeedExpToLevel($level);
        $p = ($exp_to_level-($need_exp-$exp))/$exp_to_level;
        $div = $p;
        return round($div*100, $round);
    }
}
