<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 24.04.14
 * Time: 16:08
 */

namespace MB\Glor\Params;


use MB\Configurations\ApplicationConfiguration;
use MB\Container;

class Journal extends AbstractList {

    public function addMessage($message){
        /** @var $config ApplicationConfiguration */
        $config = Container::get("app_config");
        $this->params[] = array(
            "life_time" => time() + 20,
            "message" => $message
        );
    }

    public function clearJournal() {
     foreach($this->params as $key => $post){
         if(is_array($post) and $post["life_time"] - time() < 1 or $key > 10){
             unset($this->params[$key]);
         }
     }
    }

} 