<?php

namespace models;

class Funcion {
    private $dia;
    private $hora;

    function __construct ($dia, $hora){
        $this->dia = $dia;
        $this->hora = $hora;
    }

    public function getDia(){
        return $this->dia;
    }

    public function setDia($dia){
        $this->dia = $dia;
    }

    public function getHora(){
        return $this->hora;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }
}