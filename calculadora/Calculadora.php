<?php

/**
 * Calculadora TDD, acepta una implementación de InterfazOperacion y realiza calculos
 * que se obtienen al final de todas las operaciones.
 */
class Calculadora
{
    protected $result;

    /**
     * Obtiene el resultado de todas las operaciones.
     * @return int|float El resultado.
     */
    public function resultado()
    {
        if (is_null($this->result) === true) {
            return 0;
        }
    }
}
