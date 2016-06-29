<?php

class Suma
{
    public function calcular($sumandoA = null, $sumandoB = null)
    {
        if (isset($sumandoA) !== true || isset($sumandoB) !== true) {
            throw new BadMethodCallException("Suma espera dos argumentos con valores numéricos");

        }

        if (is_numeric($sumandoA) !== true || is_numeric($sumandoB) !== true) {
            throw new InvalidArgumentException("Suma espera dos argumentos con valores numéricos");
        }
    }
}
