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
        $pins = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(0, $scorse);
    }

    public function testOneShot()
    {
        $input = new MyGame;
        $pins = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(20, $scorse);
    }

    public function testSpare()
    {
        $input = new MyGame;
        $pins = array(4, 6, 4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(35, $scorse);
    }

    public function testStrike()
    {
        $input = new MyGame;
        $pins = array(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(30, $scorse);
    }

    public function testTwoStrike()
    {
        $input = new MyGame;
        $pins = array(10, 10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(49, $scorse);
    }

    public function testFull()
    {
        $input = new MyGame;
        $pins = array(1, 1, 1, 1, 4, 6, 1, 1, 1, 1, 10, 10, 1, 1, 1, 1, 1, 1);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(58, $scorse);
    }

    public function testFullEnd()
    {
        $input = new MyGame;
        $pins = array(1, 1, 1, 1, 4, 6, 1, 1, 1, 1, 10, 10, 1, 1, 1, 1, 10);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(66, $scorse);
    }

    public function testFullTen()
    {
        $input = new MyGame;
        $pins = array(10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(300, $scorse);
    }

    public function testForExample()
    {
        $input = new MyGame;
        $pins = array(1, 4, 4, 5, 6, 4, 5, 5, 10, 0, 1, 7, 3, 6, 4, 10, 2, 8, 6);
        $scorse = $input->getSumAll($pins);
        self::assertEquals(133, $scorse);
    }

    /**
     * Bowling Kata Game
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