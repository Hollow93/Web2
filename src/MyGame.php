<?php


namespace Hollow93\Web2;



class MyGame
{
    private $frame;
    private $scorse;


    public function getSumAll($scorse)
    {

        $isSpare=0;
        $isStrike=0;
        for ($i=0; $i<19; $i++){
            if ($scorse[$i] + $scorse[$i+1] === 10)
            {
                $isSpare += $scorse[$i+2];
                $i+= 2;

            }
        }
        if(is_array($scorse)) {
            return array_sum($scorse) + $isSpare;
        }
            else
            {
            return $scorse;
        }
    }


    public function isSpare($index,$index2)
    {
        return $index + $index2 === 10;
    }

}