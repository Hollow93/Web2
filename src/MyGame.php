<?php


namespace Hollow93\Web2;



class MyGame
{
    private $scorse;

    public function getSumAll($scorse)
    {
        if(is_array($scorse)) {
            return array_sum($scorse);
        }
        else {
            return $scorse;
        }
    }


}