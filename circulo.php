<?php
/**
 *
 */
class circulo
{

// Atributos
private $radio=3;
private $pi=3.14;



// getters_Y_setters

public function setradiocirculo($radio){
  $this->vida=$radio;
}

public function getradiocirculo(){
return $this->radio;
}


// Funcion para sacar el perimetro
public function perimetrocirculo($radio){
  $perimetro=$this->radio*3.14*2;
  return $perimetro;

}
// Funcion para sacar el area
public function areacirculo(){
  $area=$this->radio*$this->pi*$this->radio;
  return $area;
}
  }

 ?>
