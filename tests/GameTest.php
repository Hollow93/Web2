<?php

namespace Hollow93\Web2\Tests;

use Hollow93\Web2\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    /**
     * @var Game
     */
    private $game;

    public function setUp()
    {
        parent::setUp();

        $this->game = $this->createGame();
    }

    public function testStupidGame()
    {
        $this->rollMany(20, 0);
        $this->assertScore(0);
    }

    public function testAllOnes()
    {
        $this->rollMany(20, 1);
        $this->assertScore(20);
    }

    public function testAllTwos()
    {
        $this->rollMany(20, 2);
        $this->assertScore(40);
    }

    public function testSpare()
    {
        $this->rollMany(1, 5);
        $this->rollMany(1, 5);
        $this->rollMany(1, 1);
        $this->rollMany(17, 0);
        $this->assertScore(12);
    }

    public function testStrike()
    {
        $this->rollMany(1, 10);
        $this->rollMany(1, 1);
        $this->rollMany(1, 1);
        $this->rollMany(17, 0);
        $this->assertScore(14);
    }

    public function testAllStrikes()
    {
        $this->rollMany(12, 10);
        $this->assertScore(300);
    }

    public function testHardcore()
    {
        $this->rollMany(1, 1);
        $this->rollMany(1, 4);
        $this->rollMany(1, 4);
        $this->rollMany(1, 5);
        $this->rollMany(1, 6);
        $this->rollMany(1, 4);
        $this->rollMany(1, 5);
        $this->rollMany(1, 5);
        $this->rollMany(1, 10);
        $this->rollMany(1, 0);
        $this->rollMany(1, 1);
        $this->rollMany(1, 7);
        $this->rollMany(1, 3);
        $this->rollMany(1, 6);
        $this->rollMany(1, 4);
        $this->rollMany(1, 10);
        $this->rollMany(1, 2);
        $this->rollMany(1, 8);
        $this->rollMany(1, 6);
        $this->assertScore(133);
    }

    /**
     * @return Game
     */
    public function createGame(): Game
    {
        return new Game();
    }

    /**
     * @param int $howMany
     * @param int $pins
     */
    public function rollMany($howMany, $pins): void
    {
        for ($i = 0; $i < $howMany; $i++) {
            $this->game->roll($pins);
        }
    }

    /**
     * @param $expectedScore
     */
    public function assertScore($expectedScore): void
    {
        self::assertEquals($expectedScore, $this->game->getScore());
    }
}