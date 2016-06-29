<?php

/**
 * Interfaz que deben implementar todas las operaciones que quieran ser
 * usadas en la calculadora.
 */
interface InterfazOperacion
{
    /**
     * Realiza la operación polimórfica de cada operador.
     * @param  int|float $operando1
     * @param  int|float $operando2
     * @throws BadMethodCallException Clases implementando esta interfaz
     * deberían tirar excepción cuando no se reciben ambos parametros.
     * @throws InvalidArgumentException Clases implementando esta interfaz
     * deberían tirar excepción cuando no se reciben parametros numéricos.
     * @return int|float El resultado de la operación.
     */
    public function calcular($operando1, $operando2);
}
