<?php


namespace Hollow93\Web2;



class MyGame
{
    private $frame;
    private $scorse;


    public function getSumAll($scorse,$attempts)
    {

        $isSpare=0;
        $isStrike=0;
        for ($i=0; $i<$attempts-1; $i++){
            if ($scorse[$i] + $scorse[$i+1] === 10)
            {
                $isSpare += $scorse[$i+2];
                $i+= 2;
            }
            if ($scorse[$i] === 10)
            {
                $isStrike += $scorse[$i+1] + $scorse[$i+2];
            }
        }
        if(is_array($scorse)) {
            return array_sum($scorse) + $isSpare + $isStrike;
        }
            else
            {
            return $scorse;
        }
    }
    
}