<?php

namespace Hollow93\Web2;


class Game
{
    /**
     * @var int
     */
    private $pins;

    public function getScore()
    {
        $score = 0;
        $firstInFrame = 0;
        for ($frame = 0; $frame < 10; $frame++) {
            if ($this->isStrike($firstInFrame)) {
                $score += $this->scoreStrike($firstInFrame);
                $firstInFrame += 1;
            } elseif ($this->isSpare($firstInFrame)) {
                $score += $this->scoreSpare($firstInFrame);
                $firstInFrame += 2;
            } else {
                $score += $this->scoreTwoPinsInFrame($firstInFrame);
                $firstInFrame += 2;
            }
        }

        return $score;
    }

    public function roll($pins)
    {
        return $this->pins[] = $pins;
    }

    /**
     * @param $index
     * @return bool
     */
    public function isSpare($index): bool
    {
        return $this->pins[$index] + $this->pins[$index + 1] == 10;
    }

    /**
     * @param $firstInFrame
     * @return bool
     */
    public function isStrike($firstInFrame): bool
    {
        return $this->pins[$firstInFrame] == 10;
    }

    /**
     * @param $firstInFrame
     * @return mixed
     */
    public function scoreStrike($firstInFrame)
    {
        return $this->pins[$firstInFrame] + $this->pins[$firstInFrame + 1] + $this->pins[$firstInFrame + 2];
    }

    /**
     * @param $firstInFrame
     * @return mixed
     */
    public function scoreSpare($firstInFrame)
    {
        return $this->pins[$firstInFrame] + $this->pins[$firstInFrame + 1] + $this->pins[$firstInFrame + 2];
    }

    /**
     * @param $firstInFrame
     * @return mixed
     */
    public function scoreTwoPinsInFrame($firstInFrame)
    {
        return $this->pins[$firstInFrame] + $this->pins[$firstInFrame + 1];
    }
}