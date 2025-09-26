<?php

class P17_Orwell
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: ";

        // Get input from the user
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check if the input is exactly 1984
        // Write your code here
        if (is_numeric($input) && intval($input) === 1984) {
            echo "Orwell\n";
        } else {
            echo "Not 1984\n";
        }
    }
}
