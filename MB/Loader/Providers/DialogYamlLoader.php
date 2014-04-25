<?php
namespace MB\Loader\Providers;
/**
 * Created by JetBrains PhpStorm.
 * User: mbabenko21
 * Date: 20.12.12
 * Time: 11:24
 * To change this template use File | Settings | File Templates.
 */
class DialogYamlLoader extends YamlLoader
{
    public function __construct($dialogId = ""){
        if($dialogId != ""){
            $this->load($dialogId);
        }
    }

    public function load($dialog)
    {
        $dialog = $this->getBaseFolder() ."/dialogs/". $dialog . ".yml";
        parent::load($dialog);
    }
}
