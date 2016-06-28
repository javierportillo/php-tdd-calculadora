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
}
