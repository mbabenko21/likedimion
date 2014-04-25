<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 25.04.14
 * Time: 23:35
 */

namespace Tests;


use MB\Common\DialogService;
use MB\Container;
use MB\Loader\FileLoader;

class DialogServiceImplTest extends \PHPUnit_Framework_TestCase {
    protected $dialogId = "test";

    protected $section = "start";
    /**
     * @var DialogService
     */
    protected $dialogService;

    protected function setUp(){
        /** @var $dialogLoader FileLoader */
        $dialogLoader = Container::get("dialog_loader");
        $this->assertInstanceOf('MB\Loader\FileLoader', $dialogLoader);
        /** @var $dialogService DialogService */
        $dialogService = Container::get("dialog_service");
        $this->assertInstanceOf('MB\Common\DialogService', $dialogService);
        $dialogLoader->load($this->dialogId);
        $dialogService->load($dialogLoader);
        $this->dialogService = $dialogService;
        parent::setUp();
    }

    public function testDepedency() {
        $this->assertInstanceOf('MB\Common\DialogService', $this->dialogService);
        $section = $this->dialogService->getSection($this->section);
        $this->assertInstanceOf('MB\I\DialogSectionInterface', $section);
        $this->assertInstanceOf("MB\\I\\ReplyInterface", $section->getNpcReply());
        $this->assertInstanceOf("MB\\I\\AnswerInterface", $section->getAnswers());
        $this->assertInternalType("string", $section->getNpcReply()->getText());
        $this->assertInternalType("boolean", $section->getAnswers()->hasNext());
        $section->getAnswers()->clearIterator();
        if($section->getAnswers()->hasNext()){
            $this->assertInstanceOf("MB\\I\\ReplyInterface", $section->getAnswers()->getNextReply());
            $section->getAnswers()->goNext();
        }

    }
}
 