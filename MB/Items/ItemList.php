<?php
namespace MB\Items;
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 18:55
 */
use MB\Glor\Params\AbstractList;
use MB\Glor\Params\PaginationList;
use MB\I\ItemInterface;
use MB\Container;
use MB\Exception\ItemsException;

class ItemList extends PaginationList
{
    /**
     * @param string $name
     * @return \MB\I\ItemInterface
     * @throws \MB\Exception\ItemsException
     */
    public function __get($name)
    {
        if ($this->__isset($name)) {
            $count = parent::__get($name);
            /** @var $itemService \MB\Common\ItemsService */
            $itemService = Container::get("items_service");
            $item = $itemService->getItem($name);
            $item->setId($name);
            $item->setCount($count);
            return $item;
        } else {
            throw new ItemsException("Item {$name} not found");
        }
    }

    public function __set($name, $value)
    {
        if ($value instanceof ItemInterface) {
            parent::__set($name, $value->getCount());
        } else {
            parent::__set($name, $value);
        }
    }

    /**
     * @param $item
     * @param $count
     */
    public function add(ItemInterface $item, $count)
    {
        if (!$this->__isset($item->getId())) {
            $this->__set($item->getId(), $count);
        } else {
            $this->__set(
                $item->getId(),
                $this->__get($item->getId())->getCount() + $count
            );
        }
    }

    /**
     * @param $itemId
     * @return \MB\I\ItemInterface
     */
    public function get($itemId)
    {
        return $this->__get($itemId);
    }

    /**
     * @param \MB\I\ItemInterface $item
     * @param int $count
     * @return void
     * @internal param string $itemId
     */
    public function drop(ItemInterface $item, $count)
    {
        $item = $this->__get($item->getId());
        $iCount = $item->getCount();
        $iCount = ($iCount - $count) > 0 ? $iCount - $count : 0;
        if ($iCount > 0) {
            $this->__set($item->getId(), $iCount);
        } else {
            $this->__unset($item->getId());
        }
    }

    public function up(ItemInterface $item)
    {
        if (isset($this->{$item->getId()})) {
            return $this->move_array_element($this->params, $item->getId(), -1);
        }
        return false;
    }

    public function down(ItemInterface $item)
    {
        if (isset($this->{$item->getId()})) {
            return $this->move_array_element($this->params, $item->getId(), 1);
        }
    }

    private function exchange_array_elements(&$array, $key_source, $key_target)
    {
        if (empty($array) || !is_array($array))
            return false;
        if (($key_source == $key_target))
            return false;
        // find keys positions
        $keys_positions = array_keys($array);
        $key_source_position = array_shift(array_keys($keys_positions, $key_source));
        $key_target_position = array_shift(array_keys($keys_positions, $key_target));
        // exchange and sort postitions
        if (($key_source_position !== null) && ($key_target_position !== null)) {
            $buffer = $keys_positions[$key_source_position];
            $keys_positions[$key_source_position] = $keys_positions[$key_target_position];
            $keys_positions[$key_target_position] = $buffer;
            ksort($keys_positions);
            // write array values in new sequence
            $new_array = array();
            foreach ($keys_positions as $key) {
                $new_array[$key] = $array[$key];
                unset($array[$key]);
            }
            $array = $new_array;
            return true;
        }
        return false;
    }

    private function move_array_element(&$array, $element_key, $offset, $bubble_effect = true)
    {
        if (empty($array) || !is_array($array))
            return false;
        if (!array_key_exists($element_key, $array))
            return false;
        $offset = (int)$offset;
        if ($offset === 0)
            return false;
        // get keys and determine positions
        $keys = array_keys($array);
        $element_position = array_shift(array_keys($keys, $element_key));
        $last_position = array_pop(array_keys($keys));
        $new_position = $element_position + $offset;
        if ($new_position < 0)
            $new_position = 0;
        if ($new_position > $last_position)
            $new_position = $last_position;
        // exchange keys
        if ((abs($offset) === 1) || ($bubble_effect !== true))
            return $this->exchange_array_elements($array, $keys[$element_position], $keys[$new_position]);
        else {
            $offset_increment = $offset > 0 ? 1 : -1;
            $buffer_position = $element_position;
            while ($buffer_position !== $new_position) {
                $keys = array_keys($array);
                $this->exchange_array_elements($array, $keys[$buffer_position], $keys[$buffer_position + $offset_increment]);
                $buffer_position += $offset_increment;
            }
            return true;
        }
    }
}
