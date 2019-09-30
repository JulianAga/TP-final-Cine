<?php

namespace models;

class PagoTC{
    private $fecha;
    private $codigo_aut;
    private $total;

    function __construct ($fecha, $codigo_aut, $total){
        $this->fecha = $fecha;
        $this->codigo_aut = $codigo_aut;
        $this->total = $total;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getCodigo_aut (){
        return $this->codigo_aut;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setCodigo_aut ($codigo_aut){
        $this->codigo_aut = $codigo_aut;
    }

    public function setTotal($total){
        $this->total = $total;
    }
}