<?php

class Resta implements InterfazOperacion
{
    public function calcular($operando1 = null, $operando2 = null)
    {
        if (isset($operando1) !== true || isset($operando2) !== true) {
            throw new BadMethodCallException("Resta espera dos argumentos con valores numéricos");

        }

        if (is_numeric($operando1) !== true || is_numeric($operando2) !== true) {
            throw new InvalidArgumentException("Resta espera dos argumentos con valores numéricos");
        }

        return $operando1 - $operando2;
    }
}
