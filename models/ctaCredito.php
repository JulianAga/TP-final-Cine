<?php

namespace models;

class ctaCredito{
    private $empresa;

    function __construct ($empresa){
        $this->$empresa;
    }

    public function getEmpresa(){
        return $this->empresa;
    }

    public function setEmpresa($empresa){
        $this->empresa =empresa;
    }
}