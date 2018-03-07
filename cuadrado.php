<?php
/**
 *Desactivar warinings
 */
 error_reporting(0);
// -----------
class cuadrado
{

// Atributos
private $lado=4.5;



// getters_Y_setters

public function setladocuadrado($lado){
  $this->lado=$lado;
}

public function getladocuadrado(){
return $this->lado;
}

// funcion para sacar el perimetro
public function perimetrocuadrado($lado){
$perimetro=$this->lado*4;
return $perimetro;
}
// funcion para sacar el area
public function areacuadrado($lado){
  $area=pow($this->lado,2);
  return $area;

}

}
 ?>
