<?php

namespace models;

class Rol {

    private $descripcion;

    function __construct ($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion ($descripcion){
        $this->descripcion = $descripcion;
    }
    
}