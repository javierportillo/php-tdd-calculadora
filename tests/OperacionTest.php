<?php

use PHPUnit\Framework\TestCase;

class OperacionTest extends TestCase
{
    public function operacionProvider()
    {
        return [
            [new Suma],
            [new Resta],
        ];
    }

    /**
     * @dataProvider operacionProvider
     * @expectedException InvalidArgumentException
     */
    public function testOperacionesTiranExcepcionConValoresNoNumericos($operacion)
    {
        $operacion->calcular(false, 'test');
    }

    /**
     * @dataProvider operacionProvider
     * @expectedException BadMethodCallException
     */
    public function testOperacionesTiranExcepcionAlFaltarArgumentos($operacion)
    {
        $operacion->calcular();
    }
}
