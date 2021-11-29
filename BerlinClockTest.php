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

    public function testMinutesGiven0ShouldReturn000000000000000(){
        //arrange - Act - Assert
        $actual = $this->minutes(0);
        $this->assertEquals("[OOOOOOOOOOO][OOOO]",$actual);
    }


    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }

}