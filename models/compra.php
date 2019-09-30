<?php

namespace models;

class Compra {
    private $fecha;
    private $cant_entradas;
    private $total;
    private $descuento;

    function __construct ($fecha, $cant_entradas, $total, $descuento){
        $this->fecha = $fecha;
        $this->cant_entradas = $cant_entradas;
        $this->total = $total;
        $this->descuento = $descuento;
    }

    public function getFecha (){
        return $this->fecha;
    }

    public function getCant_entradas(){
        return $this->cant_entradas;
    }

    public function getTotal(){
        return $this->total;
    }

    public function getDescuento(){
        return $this->descuento;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setCant_entradas ($cant_entradas){
        $this->cant_entradas = $cant_entradas;
    }

    public function setTotal($total){
        $this->total = $total;
    }

    public function setDescuento($descuento){
        $this->descuento = $descuento;
    }
}