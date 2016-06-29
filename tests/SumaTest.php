<?php

use PHPUnit\Framework\TestCase;

class SumaTest extends TestCase
{
    public function setUp()
    {
        $this->suma = new Suma;
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSumaTiraExcepcionConValoresNoNumericos()
    {
        $this->suma->calcular(false, 'test');
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testSumaTiraExcepcionAlFaltarArgumentos()
    {
        $this->suma->calcular();
    }

    /**
     * @dataProvider sumaDataProvider
     */
    public function testSumaPuedeSumarDosNumeros($a, $b, $resultado)    {
        $this->assertEquals($resultado, $this->suma->calcular($a, $b));
    }

    public function sumaDataProvider()
    {
        return [
            [0, 0, 0],
            [1, 50, 51],
            [-34, 35, 1],
            [1.5, 1.5, 3],
            [12, 0.5, 12.5],
        ];
    }
}
