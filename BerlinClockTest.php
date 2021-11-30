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
    public function testMinutesGiven41ShouldReturnYYRYYRYYOOOYOOO(){
        $actual = $this->minutes(41);
        $this->assertEquals("[YYRYYRYYOOO][YOOO]",$actual);
    }
    public function testMinutesGiven42ShouldReturnYYRYYRYYOOOYYOO(){
        $actual = $this->minutes(42);
        $this->assertEquals("[YYRYYRYYOOO][YYOO]",$actual);
    }
    public function testMinutesGiven43ShouldReturnYYRYYRYYOOOYYYO(){
        $actual = $this->minutes(43);
        $this->assertEquals("[YYRYYRYYOOO][YYYO]",$actual);
    }
    public function testMinutesGiven44ShouldReturnYYRYYRYYOOOYYYY(){
        $actual = $this->minutes(44);
        $this->assertEquals("[YYRYYRYYOOO][YYYY]",$actual);
    }
    public function testMinutesGiven45ShouldReturnYYRYYRYYROOOOOO(){
        $actual = $this->minutes(45);
        $this->assertEquals("[YYRYYRYYROO][OOOO]",$actual);
    }
    public function testMinutesGiven46ShouldReturnYYRYYRYYROOYOOO(){
        $actual = $this->minutes(46);
        $this->assertEquals("[YYRYYRYYROO][YOOO]",$actual);
    }
    public function testMinutesGiven47ShouldReturnYYRYYRYYROOYYOO(){
        $actual = $this->minutes(47);
        $this->assertEquals("[YYRYYRYYROO][YYOO]",$actual);
    }
    public function testMinutesGiven48ShouldReturnYYRYYRYYROOYYYO(){
        $actual = $this->minutes(48);
        $this->assertEquals("[YYRYYRYYROO][YYYO]",$actual);
    }
    public function testMinutesGiven49ShouldReturnYYRYYRYYROOYYYY(){
        $actual = $this->minutes(49);
        $this->assertEquals("[YYRYYRYYROO][YYYY]",$actual);
    }
    public function testMinutesGiven50ShouldReturnYYRYYRYYRYOOOOO(){
        $actual = $this->minutes(50);
        $this->assertEquals("[YYRYYRYYRYO][OOOO]",$actual);
    }
    public function testMinutesGiven51ShouldReturnYYRYYRYYRYOYOOO(){
        $actual = $this->minutes(51);
        $this->assertEquals("[YYRYYRYYRYO][YOOO]",$actual);
    }

    public function testMinutesGiven52ShouldReturnYYRYYRYYRYOYYOO(){
        $actual = $this->minutes(52);
        $this->assertEquals("[YYRYYRYYRYO][YYOO]",$actual);
    }

    public function testMinutesGiven53ShouldReturnYYRYYRYYRYOYYYO(){
        $actual = $this->minutes(53);
        $this->assertEquals("[YYRYYRYYRYO][YYYO]",$actual);
    }

    public function testMinutesGiven54ShouldReturnYYRYYRYYRYOYYYY(){
        $actual = $this->minutes(54);
        $this->assertEquals("[YYRYYRYYRYO][YYYY]",$actual);
    }

    public function testMinutesGiven55ShouldReturnYYRYYRYYRYYOOOO(){
        $actual = $this->minutes(55);
        $this->assertEquals("[YYRYYRYYRYY][OOOO]",$actual);
    }
    public function testMinutesGiven56ShouldReturnYYRYYRYYRYYYOOO(){
        $actual = $this->minutes(56);
        $this->assertEquals("[YYRYYRYYRYY][YOOO]",$actual);
    }
    public function testMinutesGiven57ShouldReturnYYRYYRYYRYYYYOO(){
        $actual = $this->minutes(57);
        $this->assertEquals("[YYRYYRYYRYY][YYOO]",$actual);
    }
    public function testMinutesGiven58ShouldReturnYYRYYRYYRYYYYYO(){
        $actual = $this->minutes(58);
        $this->assertEquals("[YYRYYRYYRYY][YYYO]",$actual);
    }
    public function testMinutesGiven59ShouldReturnYYRYYRYYRYYYYYY(){
        $actual = $this->minutes(59);
        $this->assertEquals("[YYRYYRYYRYY][YYYY]",$actual);
    }
    public function minutes(int $int): string {
        return $this->berlinClock->minutes($int);
    }




    public function testHours1shouldReturnOOOOROOO() {
        $actual =$this->hours(1);
        $this->assertEquals("[OOOO][ROOO]",$actual);
    }
    public function testHours2shouldReturnOOOORROO() {
        $actual =$this->hours(2);
        $this->assertEquals("[OOOO][RROO]",$actual);
    }
    public function testHours3shouldReturnOOOORRRO() {
        $actual =$this->hours(3);
        $this->assertEquals("[OOOO][RRRO]",$actual);
    }
    public function testHours4shouldReturnOOOORRRR() {
        $actual =$this->hours(4);
        $this->assertEquals("[OOOO][RRRR]",$actual);
    }
    public function testHours5shouldReturnROOOOOOO() {
        $actual =$this->hours(5);
        $this->assertEquals("[ROOO][OOOO]",$actual);
    }
    public function testHours6shouldReturnROOOROOO() {
        $actual =$this->hours(6);
        $this->assertEquals("[ROOO][ROOO]",$actual);
    }
    public function testHours7shouldReturnROOORROO() {
        $actual =$this->hours(7);
        $this->assertEquals("[ROOO][RROO]",$actual);
    }
    public function testHours8shouldReturnROOORRRO() {
        $actual =$this->hours(8);
        $this->assertEquals("[ROOO][RRRO]",$actual);
    }
    public function testHours9shouldReturnROOORRRR() {
        $actual =$this->hours(9);
        $this->assertEquals("[ROOO][RRRR]",$actual);
    }
    public function testHours10shouldReturnRROOOOOO() {
        $actual =$this->hours(10);
        $this->assertEquals("[RROO][OOOO]",$actual);
    }
    public function testHours11shouldReturnRROOROOO() {
        $actual =$this->hours(11);
        $this->assertEquals("[RROO][ROOO]",$actual);
    }
    public function testHours12shouldReturnRROORROO() {
        $actual =$this->hours(12);
        $this->assertEquals("[RROO][RROO]",$actual);
    }
    public function testHours13shouldReturnRROORRRO() {
        $actual =$this->hours(13);
        $this->assertEquals("[RROO][RRRO]",$actual);
    }
    public function testHours14shouldReturnRROORRRR() {
        $actual =$this->hours(14);
        $this->assertEquals("[RROO][RRRR]",$actual);
    }
    public function testHours15shouldReturnRRROOOOO() {
        $actual =$this->hours(15);
        $this->assertEquals("[RRRO][OOOO]",$actual);
    }
    public function testHours16shouldReturnRRROROOO() {
        $actual =$this->hours(16);
        $this->assertEquals("[RRRO][ROOO]",$actual);
    }
    public function testHours17shouldReturnRRROORROO() {
        $actual =$this->hours(17);
        $this->assertEquals("[RRRO][RROO]",$actual);
    }
    public function testHours18shouldReturnRRRORRRO() {
        $actual =$this->hours(18);
        $this->assertEquals("[RRRO][RRRO]",$actual);
    }
    public function testHours19shouldReturnRRRORRRR() {
        $actual =$this->hours(19);
        $this->assertEquals("[RRRO][RRRR]",$actual);
    }
    public function testHours20shouldReturnRRRROOOO() {
        $actual =$this->hours(20);
        $this->assertEquals("[RRRR][OOOO]",$actual);
    }
    public function testHours21shouldReturnRRRRROOO() {
        $actual =$this->hours(21);
        $this->assertEquals("[RRRR][ROOO]",$actual);
    }
    public function testHours22shouldReturnRRRRRROO() {
        $actual =$this->hours(22);
        $this->assertEquals("[RRRR][RROO]",$actual);
    }
    public function testHours23shouldReturnRRRRRRRO() {
        $actual =$this->hours(23);
        $this->assertEquals("[RRRR][RRRO]",$actual);
    }
    public function testHours24shouldReturnRRRRRRRR() {
        $actual =$this->hours(24);
        $this->assertEquals("[RRRR][RRRR]",$actual);
    }

    public function hours(int $int): string {
        return $this->berlinClock->hours($int);
    }



    public function test1secondShouldReturnO(){
        $actual = $this->seconds(1);

        $this->assertEquals("[O]",$actual);
    }

    public function test2secondShouldReturnR(){
        $actual = $this->seconds(2);

        $this->assertEquals("[R]",$actual);
    }

    public function testSecond() {

        for($i=0;$i<=59;$i++) {
            $actual = $this->seconds($i);
            if($i%2 === 0) {
                $this->assertEquals("[R]",$actual);
            } else {
                $this->assertEquals("[O]",$actual);
            }
        }
    }
    public function seconds(int $int):string{
        return $this->berlinClock->seconds($int);
    }
    public function testClock1() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(1,20,12);

        $this->assertEquals("[R][OOOO][ROOO][YYRYOOOOOOO][OOOO]",$actual);
    }
    public function testAllClock2() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(0,00,00);

        $this->assertEquals("[R][OOOO][OOOO][OOOOOOOOOOO][OOOO]",$actual);
    }
    public function testAllClock3() {
        $berlinClock = new berlinClock();

        $actual = $berlinClock->clock(23,59,59);

        $this->assertEquals("[O][RRRR][RRRO][YYRYYRYYRYY][YYYY]",$actual);
    }

}