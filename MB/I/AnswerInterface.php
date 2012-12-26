<?php
namespace MB\I;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 12:13
 * To change this template use File | Settings | File Templates.
 */
interface AnswerInterface
{
    /**
     * @abstract
     * @return ReplyInterface
     */
    public function getNextReply();

    /**
     * @abstract
     * @return string
     */
    public function getNextSection();

    /**
     * @abstract
     * @return bool
     */
    public function hasNext();

    /**
     * @abstract
     * @return void
     */
    public function goNext();

    /**
     * @abstract
     * @return void
     */
    public function clearIterator();
}
