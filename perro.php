<?php
require_once('perro.php');

class perro extends animal{
 private $tamaño_bigote;

 public function __construct($id,$nombre,$tamaño_bigote)
 {
    parent:: __construct($id,$nombre,$persona);
    $this->tamaño_bigote=$tamaño_bigote;
 }
 public function gettamaño_bigote()
 {
     return $this->tamaño_bigote;
 }
 
 echo "mi segundo comentario"
}

