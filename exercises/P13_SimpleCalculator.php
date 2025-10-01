<?php

class P13_ArithmeticOperations {
    public function main(): void {
        
        $numA = 8;
        $numB = 2;

        $suma = $numA + $numB;
        $resta = $numA - $numB;
        $producto = $numA * $numB;
        $cociente = number_format($numA / $numB, 1); 

        echo "$numA + $numB = $suma\n";
        echo "$numA - $numB = $resta\n";
        echo "$numA * $numB = $producto\n";
        echo "$numA / $numB = $cociente\n";
    }
}
