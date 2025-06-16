<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../Calculadora.php';

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        $calc = new Calculadora();
        $this->assertEquals(10, $calc->somar(2, 3));
    }

    public function testSubtracao()
    {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->subtrair(3, 2));
    }
}
