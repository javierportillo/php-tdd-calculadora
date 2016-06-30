<?php

use PHPUnit\Framework\TestCase;

class MultiplicacionTest extends TestCase
{
    public function setUp()
    {
        $this->multiplicacion = new Multiplicacion;
    }

    /**
     * @dataProvider multiplicacionDataProvider
     */
    public function testMultiplicacionPuedeMultiplicarDosNumeros($a, $b, $resultado)    {
        $this->assertEquals($resultado, $this->multiplicacion->calcular($a, $b));
    }

    public function multiplicacionDataProvider()
    {
        return [
            [0, 0, 0],
            [1, 50, 50],
            [3, 3, 9],
            [5, -5, -25],
            [12, 0.5, 6],
        ];
    }
}
