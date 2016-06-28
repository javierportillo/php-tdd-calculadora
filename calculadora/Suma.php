<?php

class Suma
{
    public function calcular($sumandoA, $sumandoB)
    {
        if (is_numeric($sumandoA) !== true || is_numeric($sumandoB) !== true) {
            throw new InvalidArgumentException("Suma espera dos argumentos con valores numéricos");
        }
    }
}
