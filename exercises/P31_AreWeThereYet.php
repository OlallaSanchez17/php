<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        do {
            echo "Give a number: ";
            $number = trim(fgets(STDIN));
        } while ($number != 4);
    }
}

