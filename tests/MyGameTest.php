<?php
/**
 * Created by PhpStorm.
 * User: Владислав
 * Date: 26.11.2017
 * Time: 18:30
 */

namespace Hollow93\Web2\Tests;


use Hollow93\Web2\MyGame;
use PHPUnit\Framework\TestCase;

class MyGameTest extends TestCase
{

    public function testEasyGame()
    {
        $input = new MyGame;
        $attempts = 20 ;
        $pins= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        $scorse = $input->getSumAll($this->getScorse($attempts,$pins),$attempts);
        self::assertEquals(0,$scorse);
    }

    public function testOneShot()
    {
        $input = new MyGame;
        $attempts = 20 ;
        $pins= array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
        $scorse = $input->getSumAll($this->getScorse($attempts,$pins),$attempts);
        self::assertEquals(20,$scorse);
    }

    public function testSpare()
    {
        $input = new MyGame;
        $attempts = 20 ;
        $pins= array(4,6,4,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
        $scorse = $input->getSumAll($this->getScorse($attempts,$pins),$attempts);
        self::assertEquals(35,$scorse);
    }

    public function testStrike()
    {
        $input = new MyGame;
        $attempts = 19 ;
        $pins= array(10,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
        $scorse = $input->getSumAll($this->getScorse($attempts,$pins),$attempts);
        self::assertEquals(30,$scorse);

    }

    private function getScorse($attempts, $pins)
    {
        for($i=0; $i<$attempts; $i++)
        {
            if (is_array($pins))
            {


                $scorse[] = $pins;

            }

            $scorse = $pins;
        }
        return $scorse;
    }



    /**
     * @return int
     */



    /**
     *
     *
     *                 IN                                     OUT
     *
     *                 кол-во 20 по 1                           20
     *                 кол-во 20 по 0                            0
     *                 кол-во 20 по 4 6 остальное по 1          29
     *
     *
     *
     *
     *
     *
     *
     *
     *
     */
}