<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function setUp()
    {
        $this->calculadora = new Calculadora;
    }

    public function testCalculadoraRetornaCeroCuandoNoSeHanHechoOperaciones()
    {
        $this->assertEquals(0, $this->calculadora->resultado());
    }
}
