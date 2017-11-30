<?php


namespace Hollow93\Web2;


class MyGame
{
    private $frame;
    private $scorse;


    public function getSumAll($scorse, $attempts)
    {
        array_push($scorse,0);
        $isSpare = 0;
        $isStrike = 0;
        for ($i = 0; $i < $attempts - 1; $i++) {
            if ($this->isSpare($scorse, $i)) {
                $isSpare += $scorse[$i + 2];
                $i += 2;
            }
            if ($this->isStrike($scorse, $i)) {
                $isStrike += $scorse[$i + 1] + $scorse[$i + 2];
            }
        }
        return array_sum($scorse) + $isSpare + $isStrike;
    }

    /**
     * @param $scorse
     * @param $i
     * @return bool
     */
    public function isSpare($scorse, $i): bool
    {
        return $scorse[$i] + $scorse[$i + 1] === 10;
    }

    /**
     * @param $scorse
     * @param $i
     * @return bool
     */
    public function isStrike($scorse, $i): bool
    {
        return $scorse[$i] === 10;
    }

}