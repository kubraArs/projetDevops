<?php



class BerlinClock
{
    private function simpleMinutes(int $int): string
    {
        //Y = Yellow
        if ($int === 1) return "YOOO";
        if ($int === 2) return "YYOO";
        if ($int === 3) return "YYYO";
        if ($int === 4) return "YYYY";
        return "OOOO"; //0
    }

    private function fiveMinutes(int $int): string
    {
        // R = Red
        if ($int === 5) return "YOOOOOOOOOO";
        if ($int === 10) return "YYOOOOOOOOO";
        if ($int === 15) return "YYROOOOOOOO";
        if ($int === 20) return "YYRYOOOOOOO";
        if ($int === 25) return "YYRYYOOOOOO";
        if ($int === 30) return "YYRYYROOOOO";
        if ($int === 35) return "YYRYYRYOOOO";
        if ($int === 40) return "YYRYYRYYOOO";
        if ($int === 45) return "YYRYYRYYROO";
        if ($int === 50) return "YYRYYRYYRYO";
        if ($int === 55) return "YYRYYRYYRYY";
        return "OOOOOOOOOOO";
    }

    public function minutes(int $int): string
    {
        $simpleMinutes = $int % 5;
        $fiveMinutes = $int - $simpleMinutes;
        $resultSimple = $this->simpleMinutes($simpleMinutes);
        $resultFive = $this->fiveMinutes($fiveMinutes);
        return "[" . $resultFive . "][" . $resultSimple . "]";
    }

    private function simpleHours(int $int): string
    {
        if ($int === 1) return "[ROOO]";
        if ($int === 2) return "[RROO]";
        if ($int === 3) return "[RRRO]";
        if ($int === 4) return "[RRRR]";
        return "[OOOO]";
    }

    private function fiveHours(int $int): string
    {
        if ($int === 5) return "[ROOO]";
        if ($int === 10) return "[RROO]";
        if ($int === 15) return "[RRRO]";
        if ($int === 20) return "[RRRR]";
        return "[OOOO]";
    }

    public function hours(int $int): string
    {
        $simpleHours = $int % 5;
        $fiveHours = $int - $simpleHours;
        $resultSimple = $this->simpleHours($simpleHours);
        $resultFive = $this->fiveHours($fiveHours);
        return $resultFive . $resultSimple;
    }

    public function seconds(int $int): string
    {
        if ($int % 2 != 0) {
            return "[O]";
        }
        return "[R]";
    }
    public function clock(int $hour,int $minutes,int $seconds): string
    {
        $hourRes = $this->hours($hour);
        $MinutesRes = $this->minutes($minutes);
        $secondsRes = $this->seconds($seconds);
        return $secondsRes.$hourRes.$MinutesRes;
    }
}