<?php

class Resta extends Operacion
{
    protected function operar($operando1, $operando2)
    {
        return $operando1 - $operando2;
    }
}
