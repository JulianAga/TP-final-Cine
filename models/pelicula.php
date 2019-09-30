<?php

namespace models;

class Pelicula{
    private $nombre;
    private $duracion;
    private $lenguaje;
    private $imagen;

    function __construct($nombre, $duracion, $lenguaje, $imagen){
        $this->nombre = $nombre;
        $this->duracion= $duracion;
        $this->lenguaje = $lenguaje;
        $this->imagen = $imagen;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDuracion(){
        return $this->duracion;
    }

    public function setDuracion($duracion){
        $this->duracion= $duracion;
    }

    public function getLenguaje(){
        return $this->lenguaje;
    }

    public function setLenguaje($lenguaje){
        $this->lenguaje = $lenguaje;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function setImagen ($imagen){
        $this->imagen = $imagen;
    }
}