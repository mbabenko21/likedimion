<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:32
     */
/**
 * @MappedSuperClass
 */
abstract class LightRace extends AbstractChar
{

    /**
     * @var string
     * @Column(name="class", type="string")
     */
    protected $class;

    public function __construct()
    {
        parent::__construct();
        $this->class = $this->getClass();
    }

    /**
     * @return string
     */
    public function getRace()
    {
        return self::LightRace;
    }

}
