<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../exercises/P03_OnceUponATime.php';

class P03_OnceUponATimeTest extends TestCase {
    public function testMain() {
        // Esperamos estas líneas exactas de salida (con saltos de línea tipo "\n")
        $this->expectOutputString("Once upon a time\nthere was\na program\n");

        $onceUponATime = new P03_OnceUponATime();
        $onceUponATime->main();
    }
}
