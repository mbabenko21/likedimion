<?php
namespace MB\Glor\Char;
    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:27
     */
/**
 * @MappedSuperClass
 */
abstract class DarkRace extends AbstractChar
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
        return self::DarkRace;
    }

}
