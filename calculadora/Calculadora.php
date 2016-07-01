<?php

/**
 * Calculadora TDD, acepta una implementación de InterfazOperacion y realiza calculos
 * que se obtienen al final de todas las operaciones.
 */
class Calculadora
{
    protected $resultado = 0;
    protected $operacion;

    /**
     * Obtiene el resultado de todas las operaciones.
     * @return int|float El resultado.
     */
    public function resultado()
    {
        return $this->resultado;
    }

    /**
     * Ajusta la operación con la que se realizarán los siguientes cálculos.
     */
    public function operacion(Operacion $operacion)
    {
        $this->operacion = $operacion;
    }

    public function calcular($numero)
    {
        $operandos = func_get_args();
        foreach ($operandos as $operando) {
            $this->resultado = $this->operacion->calcular($this->resultado, $operando);
        }
    }
}
