<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        while (true) {
            echo "Give a number: ";
            $number = (int) trim(fgets(STDIN));

            if ($number < 0) {
                echo "Unsuitable number\n";
                continue;
            }

            if ($number === 0) {
                break;
            }

            echo ($number * $number) . "\n";
        }
    }
}
