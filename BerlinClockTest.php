<?php


use PHPUnit\Framework\TestCase;
require "BerlinClock.php";
require "vendor/autoload.php";

class BerlinClockTest extends TestCase
{
    public function setUp(): void
    {
        $this->berlinClock = new BerlinClock();
    }

    public function testMinutesGiven0ShouldReturnOOOOOOOOOOOOOOO(){
        //arrange - Act - Assert
        $actual = $this->minutes(0);
        $this->assertEquals("[OOOOOOOOOOO][OOOO]",$actual);
    }
    public function testMinutesGiven1ShouldReturnOOOOOOOOOOOYOOO(){
        $actual = $this->minutes(1);
        $this->assertEquals("[OOOOOOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven2ShouldReturnOOOOOOOOOOOYYOO(){
        $actual = $this->minutes(2);
        $this->assertEquals("[OOOOOOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven3ShouldReturnOOOOOOOOOOOYYYO(){
        $actual = $this->minutes(3);
        $this->assertEquals("[OOOOOOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven4ShouldReturnOOOOOOOOOOOYYYY(){
        $actual = $this->minutes(4);
        $this->assertEquals("[OOOOOOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven5ShouldReturnYOOOOOOOOOO(){
    $actual = $this->minutes(5);
    $this->assertEquals("[YOOOOOOOOOO][OOOO]",$actual);
    }

    public function testMinutesGiven6ShouldReturnYOOOOOOOOOOYOOO(){
        $actual = $this->minutes(6);
        $this->assertEquals("[YOOOOOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven7ShouldReturnYOOOOOOOOOOYYOO(){
        $actual = $this->minutes(7);
        $this->assertEquals("[YOOOOOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven8ShouldReturnYOOOOOOOOOOYYYO(){
        $actual = $this->minutes(8);
        $this->assertEquals("[YOOOOOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven9ShouldReturnYOOOOOOOOOOYYYY(){
        $actual = $this->minutes(9);
        $this->assertEquals("[YOOOOOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven10ShouldReturnYYOOOOOOOOOOOOO(){
        $actual = $this->minutes(10);
        $this->assertEquals("[YYOOOOOOOOO][OOOO]",$actual);
    }

    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }

}