<?php

namespace models;

class Entrada{

    private $numero;
    private $codigoQR;

   function __construct ($numero, $codigoQR){
       $this->numero = $numero;
       $this->codigoQR = $codigoQR;
   }

   public function getNumero(){
       return $this->numero;
   }

   public function getCodigoQR(){
       return $this->codigoQR;
   }

   public function setNumero($numero){
       $this->numero = $numero;
   }

   public function setCodigoQR($codigoQR){
       $this->codigoQR = $codigoQR;
   }
}