<?php

class Calculadora
{
    protected $result;

    public function resultado()
    {
        if (is_null($this->result) === true) {
            return 0;
        }
    }
}
