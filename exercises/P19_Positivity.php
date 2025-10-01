<?php

class P19_Positivity
{
    public function main(): void
    {

        echo "Give a number: ";

        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));


        if (is_numeric($input)) {
            $number = intval($input);

            if ($number > 0) {
                echo "The number is positive.\n";
            } else {
                echo "The number is not positive.\n";
            }
        } else {
            echo "Invalid input.\n";
        }
    }
}
