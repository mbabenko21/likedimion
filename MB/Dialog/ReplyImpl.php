<?php
namespace MB\Dialog;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */
use MB\I\ReplyInterface;

class ReplyImpl implements ReplyInterface
{
    /** @var string */
    protected $text = "";

    public function __construct($reply)
    {
        $this->text = $reply;
    }

    /**
     * @return string
     */
    public function getText()
    {
        $text = $this->text;
        $text = preg_replace_callback("/{php}(.*){\/php}/", array($this, 'replacePHP'), $text);
        $text = preg_replace_callback("/{%(.*)%}/", array($this, 'replaceCharField'), $text);
        $text = str_replace('\n', '<br/>', $text);
        $this->text = $text;
        return $this->text;
    }


    private function replacePHP($text)
    {
        $text = eval($text[1]);
        return $text;
    }

    private function replaceCharField($text){
        $char = \MB\Container::get("auth_service")->getCurrentUser()->getChar();
        $method ="get".ucfirst(strtolower($text[1]));
        if(method_exists($char, $method)){
            return $char->$method();
        } else {
            return "";
        }
    }
}
