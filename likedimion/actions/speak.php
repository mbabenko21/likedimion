<?php
use MB\Helper\RequestHelper;
use MB\Exception\DialogException;
use MB\Loader\Providers\DialogYamlLoader;

/**
 * Диалоги
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 * Time: 0:06
 */

/**
 * @property \MB\Glor\Char\AbstractChar $char
 */

$dialogId = RequestHelper::get("npc", null);
/** @var $dialogService \MB\Common\DialogService */
$dialogService = \MB\Container::get("dialog_service");

if (is_null($dialogId)) {
    \MB\Helper\RequestHelper::redirect("/?do=main");
}
$data = array();
$dialogService->load(new DialogYamlLoader($dialogId));
$section = RequestHelper::get("section", null);
if (is_null($section)) {
    $section = "start";
}
$errors = array();
try{
$section = $dialogService->getSection($section);
$npcSpeak = $section->getNpcReply()->getText();
$answers = array();
$answer = $section->getAnswers();
$answer->clearIterator();
while($answer->hasNext()){
    $answers[] = array(
        $answer->getNextReply()->getText(),
        $answer->getNextSection()
        );
    $answer->goNext();
}
} catch (DialogException $e){
    $errors[] = $e->getMessage();
}
$data = array(
    "npc_reply" => (isset($npcSpeak)) ? $npcSpeak : "",
    "answers" => (isset($answers)) ? $answers : array(),
    "dig" => $dialogId,
    "errors" => $errors
);

MB\View::make("game/speak/main.tpl", $data);
