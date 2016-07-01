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

    public function testCalculadoraPuedeUsarLasOperaciones()
    {
        $suma = new Suma;
        $multiplicacion = new Multiplicacion;
        $resta = new Resta;

        $this->calculadora->operacion($suma);
        $this->calculadora->calcular(1);
        $this->assertEquals(1, $this->calculadora->resultado());

        $this->calculadora->calcular(1);
        $this->assertEquals(2, $this->calculadora->resultado());

        $this->calculadora->calcular(2);
        $this->assertEquals(4, $this->calculadora->resultado());

        $this->calculadora->calcular(3, 4, 5);
        $this->assertEquals(16, $this->calculadora->resultado());

        $this->calculadora->operacion($multiplicacion);
        $this->calculadora->calcular(-1);
        $this->assertEquals(-16, $this->calculadora->resultado());

        $this->calculadora->operacion($suma);
        $this->calculadora->calcular(6);
        $this->assertEquals(-10, $this->calculadora->resultado());

        $this->calculadora->operacion($resta);
        $this->calculadora->calcular(100, 50, 25);
        $this->assertEquals(-185, $this->calculadora->resultado());
    }
}
