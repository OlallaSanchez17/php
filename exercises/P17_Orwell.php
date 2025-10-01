<?php

class P17_Orwell
{
    public function main(): void
    {

        echo "Give a number: ";


        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        
        if (is_numeric($input) && intval($input) === 1984) {
            echo "Orwell\n";
        } else {
            echo "Not 1984\n";
        }
    }
}
