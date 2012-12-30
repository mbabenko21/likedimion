<?php
namespace MB\Dialog;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */
use MB\I\DialogSectionInterface;
use Doctrine\Common\Collections\ArrayCollection;
use MB\Exception\DialogException;
use MB\I\LoaderInterface;
use MB\I\ReplyInterface;

class DialogSectionImpl implements DialogSectionInterface
{
    /**
     * @var array
     */
    protected $section = array();

    public function __construct(array $section)
    {
        $this->section = $section;
    }

    /**
     * @return ReplyInterface
     * @throws \MB\Exception\DialogException
     */
    public function getNpcReply()
    {
        if (isset($this->section["npc"])) {
            return new ReplyImpl($this->section["npc"]);
        } else {
            throw new DialogException("Npc reply not found");
        }
    }

    /**
     * @return \MB\I\AnswerInterface|void
     */
    public function getAnswers()
    {
        $collection = new ArrayCollection();
        if (isset($this->section["answers"])) {
            $answers = $this->section["answers"];
            foreach ($answers as $answer) {
                $reply = new ReplyImpl($answer["reply"]);
                $newAnswer["reply"] = $reply;
                $newAnswer["section"] = $answer["section"];
                $collection->add($newAnswer);
            }
        }
        return new AnswerImpl($collection);
    }
}
