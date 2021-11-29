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
    public function testMinutesGiven11ShouldReturnYYOOOOOOOOOYOOO(){
        $actual = $this->minutes(11);
        $this->assertEquals("[YYOOOOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven12ShouldReturnYYOOOOOOOOOYYOO(){
        $actual = $this->minutes(12);
        $this->assertEquals("[YYOOOOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven13ShouldReturnYYOOOOOOOOOYYYO(){
        $actual = $this->minutes(13);
        $this->assertEquals("[YYOOOOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven14ShouldReturnYYOOOOOOOOOYYYY(){
        $actual = $this->minutes(14);
        $this->assertEquals("[YYOOOOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven15ShouldReturnYYROOOOOOOOOOOO(){
        $actual = $this->minutes(15);
        $this->assertEquals("[YYROOOOOOOO][OOOO]",$actual);
    }
    public function testMinutesGiven16ShouldReturnYYROOOOOOOOYOOO(){
        $actual = $this->minutes(16);
        $this->assertEquals("[YYROOOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven17ShouldReturnYYROOOOOOOOYYOO(){
        $actual = $this->minutes(17);
        $this->assertEquals("[YYROOOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven18ShouldReturnYYROOOOOOOOYYYO(){
        $actual = $this->minutes(18);
        $this->assertEquals("[YYROOOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven19ShouldReturnYYROOOOOOOOYYYY(){
        $actual = $this->minutes(19);
        $this->assertEquals("[YYROOOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven20ShouldReturnYYRYOOOOOOOOOOO(){
        $actual = $this->minutes(20);
        $this->assertEquals("[YYRYOOOOOOO][OOOO]",$actual);
    }
    public function testMinutesGiven21ShouldReturnYYRYOOOOOOOYOOO(){
        $actual = $this->minutes(21);
        $this->assertEquals("[YYRYOOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven22ShouldReturnYYRYOOOOOOOYYOO(){
        $actual = $this->minutes(22);
        $this->assertEquals("[YYRYOOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven23ShouldReturnYYRYOOOOOOOYYYO(){
        $actual = $this->minutes(23);
        $this->assertEquals("[YYRYOOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven24ShouldReturnYYRYOOOOOOOYYYY(){
        $actual = $this->minutes(24);
        $this->assertEquals("[YYRYOOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven25ShouldReturnYYRYYOOOOOOOOOO(){
    $actual = $this->minutes(25);
    $this->assertEquals("[YYRYYOOOOOO][OOOO]",$actual);
    }
    public function testMinutesGiven26ShouldReturnYYRYYOOOOOOYOOO(){
        $actual = $this->minutes(26);
        $this->assertEquals("[YYRYYOOOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven27ShouldReturnYYRYYOOOOOOYYOO(){
        $actual = $this->minutes(27);
        $this->assertEquals("[YYRYYOOOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven28ShouldReturnYYRYYOOOOOOYYYO(){
        $actual = $this->minutes(28);
        $this->assertEquals("[YYRYYOOOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven29ShouldReturnYYRYYOOOOOOYYYY(){
        $actual = $this->minutes(29);
        $this->assertEquals("[YYRYYOOOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven30ShouldReturnYYRYYROOOOOOOOO(){
        $actual = $this->minutes(30);
        $this->assertEquals("[YYRYYROOOOO][OOOO]",$actual);
    }

    public function testMinutesGiven31ShouldReturnYYRYYROOOOOYOOO(){
        $actual = $this->minutes(31);
        $this->assertEquals("[YYRYYROOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven32ShouldReturnYYRYYROOOOOYYOO(){
        $actual = $this->minutes(32);
        $this->assertEquals("[YYRYYROOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven33ShouldReturnYYRYYROOOOOYYYO(){
        $actual = $this->minutes(33);
        $this->assertEquals("[YYRYYROOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven34ShouldReturnYYRYYROOOOOYYYY(){
        $actual = $this->minutes(34);
        $this->assertEquals("[YYRYYROOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven35ShouldReturnYYRYYRYOOOOOOOO(){
        $actual = $this->minutes(35);
        $this->assertEquals("[YYRYYRYOOOO][OOOO]",$actual);
    }
    public function testMinutesGiven36ShouldReturnYYRYYRYOOOOYOOO(){
        $actual = $this->minutes(36);
        $this->assertEquals("[YYRYYRYOOOO][YOOO]",$actual);
    }
    public function testMinutesGiven37ShouldReturnYYRYYRYOOOOYYOO(){
        $actual = $this->minutes(37);
        $this->assertEquals("[YYRYYRYOOOO][YYOO]",$actual);
    }
    public function testMinutesGiven38ShouldReturnYYRYYRYOOOOYYYO(){
        $actual = $this->minutes(38);
        $this->assertEquals("[YYRYYRYOOOO][YYYO]",$actual);
    }
    public function testMinutesGiven39ShouldReturnYYRYYRYOOOOYYYY(){
        $actual = $this->minutes(39);
        $this->assertEquals("[YYRYYRYOOOO][YYYY]",$actual);
    }
    public function testMinutesGiven40ShouldReturnYYRYYRYYOOOOOOO(){
        $actual = $this->minutes(40);
        $this->assertEquals("[YYRYYRYYOOO][OOOO]",$actual);
    }


    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }

}