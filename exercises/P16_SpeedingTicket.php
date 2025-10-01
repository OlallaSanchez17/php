<?php

class P16_SpeedingTicket {
    public function main(): void {
        
        $speed = 121;


      if ($speed > 120) {
            echo "Speeding ticket!";
        } else {
            echo "Within speed limit.";
        }
    }
}
