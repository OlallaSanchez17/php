<?php

class P05_SecondsInOneDay {
    public function main(): void {
        $hours = 24;
        $minutesPerHour = 60;
        $secondsPerMinute = 60;

        $secondsInOneDay = $hours * $minutesPerHour * $secondsPerMinute;

        echo "Seconds in 1 day:\n";
        echo "$secondsInOneDay\n";
    }
}
