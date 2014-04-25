<?php
/**
 * Created by PhpStorm.
 * User: Maksim
 * Date: 23.04.14
 * Time: 23:33
 */

namespace MB\Glor\Params;

class CoolDownParams extends AbstractList {
    public function setCoolDown($id, $time){
        $this->{$id} = time() + $time;
    }

    /**
     * @param $id
     * @return int
     */
    public function getTime($id){
        $time = 0;
        if(isset($this->{$id})){
            $time = $this->{$id} - time();
        }
        return $time;
    }
}