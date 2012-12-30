<?php
namespace MB\Glor\Locations;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 19:23
 */
use MB\Glor\AbstractAutoIncrementObject;
use MB\I\ListInterface;
use Doctrine\ORM\EntityNotFoundException;
use MB\Glor\Char\AbstractChar;
use MB\I\ExportableInterface;

/**
 * @Entity
 * @Table(name="char_list")
 */
class CharList extends AbstractAutoIncrementObject implements ExportableInterface, ListInterface
{
    /**
     * @var string
     * @Column(name="loc_id", type="string", unique=true)
     */
    protected $locId;
    /**
     * @var array
     * @Column(name="char_list", type="array")
     */
    protected $charList = array();

    /**
     * @return array
     */
    public function export()
    {
        /** @var $charService \MB\Common\CharService */
        $charService = \MB\Container::get("char_service");
        $list = array();
        foreach ($this->charList as $char) {
            try {
                $char = $charService->findById($char);
                $list[] = $char;
            } catch (EntityNotFoundException $e) {
                continue;
            }
        }
        return $list;
    }

    /**
     * @param array $list
     */
    public function import(array $list)
    {
        $this->charList = array();
        foreach ($list as $char) {
            if ($char instanceof AbstractChar) {
                $this->add($char);
            }
        }
    }

    /**
     * @return string
     */
    public function getLocId()
    {
        return $this->locId;
    }

    /**
     * @param string $locId
     */
    public function setLocId($locId)
    {
        $this->locId = $locId;
    }

    /**
     * @return array
     */
    public function getCharList()
    {
        return $this->charList;
    }

    /**
     * Добавить персонажа в локацию
     * @param \MB\Glor\Char\AbstractChar $char
     */
    public function add($char)
    {
        if ($char instanceof AbstractChar) {
            $this->charList[] = $char->getId();
        }
    }

    /**
     * @param \MB\Glor\Char\AbstractChar $char
     * @return bool
     */
    public function exists($char)
    {
        if ($char instanceof AbstractChar) {
            foreach ($this->charList as $c) {
                if ($c == $char->getId()) {
                    return true;
                }
            }
        }
        return false;
    }

    /**
     * Убрать персонажа из локации
     * @param \MB\Glor\Char\AbstractChar $char
     */
    public function remove($char)
    {
        if ($char instanceof AbstractChar) {
            foreach ($this->charList as $key => $c) {
                if ($c == $char->getId()) {
                    unset($this->charList[$key]);
                }
            }
        }
    }

    /**
     * @param array $charList
     */
    public function setCharList(array $charList)
    {
        $this->charList = $charList;
    }

}
