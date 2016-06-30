<?php

/**
 * Clase que deben extender todas las operaciones que quieran ser
 * usadas en la calculadora.
 */
abstract class Operacion
{
    /**
     * Realiza la operación polimórfica de cada operador.
     * @internal De hecho, esta es solo la abstracción de las partes comunes
     * de todas las Operaciones, la lógica real de cada operación se lleva
     * a cabo en el método operar.
     * @param  int|float $operando1
     * @param  int|float $operando2
     * @throws BadMethodCallException Clases implementando esta interfaz
     * deberían tirar excepción cuando no se reciben ambos parametros.
     * @throws InvalidArgumentException Clases implementando esta interfaz
     * deberían tirar excepción cuando no se reciben parametros numéricos.
     * @return int|float El resultado de la operación.
     */
    public function calcular($operando1 = null, $operando2 = null)
    {
        if (isset($operando1) !== true || isset($operando2) !== true) {
            throw new BadMethodCallException(get_class($this) . ' espera dos argumentos con valores numéricos');

        }

        if (is_numeric($operando1) !== true || is_numeric($operando2) !== true) {
            throw new InvalidArgumentException(get_class($this) . ' espera dos argumentos con valores numéricos');
        }

        return $this->operar($operando1, $operando2);
    }

    abstract protected function operar($operando1, $operando2);
}
