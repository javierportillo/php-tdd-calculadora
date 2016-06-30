<?php

use PHPUnit\Framework\TestCase;

class RestaTest extends TestCase
{
    public function setUp()
    {
        $this->resta = new Resta;
    }

    /**
     * @dataProvider restaDataProvider
     */
    public function testRestaPuedeRestarDosNumeros($a, $b, $resultado)    {
        $this->assertEquals($resultado, $this->resta->calcular($a, $b));
    }

    public function restaDataProvider()
    {
        return [
            [0, 0, 0],
            [1, 50, -49],
            [34, 35, -1],
            [1.5, 1.5, 0],
            [12, 0.5, 11.5],
        ];
    }
}
