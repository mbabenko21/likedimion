<?php
namespace MB\Glor;

    /**
     * @author Maks Babenko <mbabenko21@gmail.com>
     * @package
     *         Time: 0:03
     */
/**
 * @MappedSuperClass
 */
use MB\Glor\Params\AbstractList;

class AbstractAutoIncrementObject extends AbstractList
{
    /**
     * @var int
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
