<?php

class P20_Adulthood
{
    public function main(): void
    {
        echo "How old are you? ";

        $age = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if (is_numeric($age)) {
            if ((int)$age >= 18) {
                echo "You are an adult\n";
            } else {
                echo "You are not an adult\n";
            }
        } else {
            echo "Invalid input. Please enter a number.\n";
        }
    }
}

