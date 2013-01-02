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
use MB\Helper\StrHelper;
use MB\Container;
use MB\Exception\DialogException;
use MB\I\PluginInterface;

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
        $text = preg_replace_callback("/{@(.*)}/", array($this, 'initPlugin'), $text);
        $text = str_replace('\n', '<br/>', $text);
        $text = StrHelper::bbCode($text);
        $this->text = $text;
        return $this->text;
    }


    private function replacePHP($text)
    {
        $text = eval($text[1]);
        return $text;
    }

    private function replaceCharField($text){
        $char = Container::get("auth_service")->getCurrentUser()->getChar();
        $text = explode(",", $text[1]);
        $method ="get".ucfirst($text[0]);
        if(method_exists($char, $method)){
            $response = !isset($text[1]) ? $char->$method() : $char->$method()->$text[1];
            return $response;
        } else {
            return "";
        }
    }

    private function initPlugin($text)
    {
        $pluginName = $text[1];
        /** @var $plugin \MB\I\PluginInterface */
        $plugin = Container::get($pluginName);
        if(false === $plugin instanceof PluginInterface)
        {
            throw new DialogException("Plugin {@$pluginName} need be implemented to PluginInterface");
        }
        $plugin->action();
    }
}
