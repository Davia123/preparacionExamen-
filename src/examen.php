<?php

class examen
{
    public $nota;



    public function __construct($a1)
    {

        $this->nota = $a1;
    }


    public function comprobarNota()
    {
        if ($this->nota < 5) {
            return "suspendido";
        } elseif ($this->nota == 5) {
            return "aprovado";
        } elseif ($this->nota >= 6 && $this->nota < 7) {
            return "bien";
        } elseif ($this->nota >= 8 && $this->nota <= 9) {
            return "notable";
        } else {
            return "excelente";
        }
    }
}
