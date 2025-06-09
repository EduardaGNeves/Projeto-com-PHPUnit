<?php
use PHPUnit\Framework\TestCase;

require_once "Calculadora.php";

class CalculadoraTest extends TestCase {
    public function testSoma() {
        $calc = new Calculadora();
        $this->assertEquals(4, $calc->soma(2, 2));
    }
}
