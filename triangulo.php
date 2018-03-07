<?php
/**
 *
 */
class triangulo
{

// Atributos
private $base=5.2;
private $altura=3;


// getters_Y_setters

public function setbasetriangulo($base){
  $this->base=$base;
}

public function getbasetriangulo(){
return $this->base;
}

public function setalturatriangulo($altura){
  $this->altura=$altura;
}

public function getalturatriangulo(){
return $this->altura;
}

// Funcion para sacar el perimetro
public function perimetrotriangulo(){
  $perimetro1=$this->altura*2+$this->base;
  return $perimetro1;

}
// Funcion para sacar el area
public function areatriangulo(){
  $area1=$this->base*$this->altura/2;
  return $area1;
}
    }


 ?>
