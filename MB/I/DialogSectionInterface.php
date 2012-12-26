<?php
namespace MB\I;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:11
 * To change this template use File | Settings | File Templates.
 */
interface DialogSectionInterface
{
    /**
     * @abstract
     * @return ReplyInterface
     */
    public function getNpcReply();

    /**
     * @abstract
     * @return AnswerInterface
     */
    public function getAnswers();
}
