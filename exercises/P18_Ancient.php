<?php

class P18_Ancient
{
    public function main(): void
    {

        echo "Give a year: ";

        
        $year = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (is_numeric($year)) {
            $year = intval($year);

            if ($year < 2010) {
                echo "Ancient\n";
            } else {
                echo "Modern\n";
            }
        } else {
            echo "Invalid input\n";
        }
    }
}
