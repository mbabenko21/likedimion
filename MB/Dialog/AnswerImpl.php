<?php
namespace MB\Dialog;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 12:14
 * To change this template use File | Settings | File Templates.
 */
use MB\I\AnswerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use MB\I\ReplyInterface;

class AnswerImpl implements AnswerInterface
{
    /** @var ArrayCollection */
    private $collection;
    /** @var int */
    protected $current = 0;

    public function __construct(ArrayCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return ReplyInterface
     */
    public function getNextReply()
    {
        $current = $this->collection->get($this->current);
        return $current["reply"];
    }

    /**
     * @return string
     */
    public function getNextSection()
    {
        $current = $this->collection->get($this->current);
        return $current["section"];
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        $has = $this->collection->containsKey($this->current);
        return $has;
    }

    /**
     * @return void
     */
    public function clearIterator()
    {
        $this->current = 0;
    }

    /**
     * @return void
     */
    public function goNext()
    {
        $this->current++;
    }
}
