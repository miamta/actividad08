<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actividad 08</title>
  </head>
  <body>
    <h2>Calcular el area y el perimetro</h2>
      <h3>cuadrado</h3>
    <?php
    include 'cuadrado.php';

    // Nuevo objeto
    $cuadrado = new cuadrado();
    echo "El lado del cuadrado es: ";
    $cuadrado->setladocuadrado(4.5);

    echo  $cuadrado->getladocuadrado();
    echo "<br>";
    echo "El perimetro del cuadrado es: ";
    echo $cuadrado->perimetrocuadrado();
    echo "<br>";
    echo "El area del cuadrado es: ";
    echo $cuadrado->areacuadrado();

     ?>

     <hr>

         <h3>triangulo</h3>

     <?php
     include 'triangulo.php';

     // Nuevo objeto
     $triangulo = new triangulo();
     $triangulo->setalturatriangulo(3);
     $triangulo->setbasetriangulo(5.2);


     echo "La altura del triangulo es: ";
     echo  $triangulo->getalturatriangulo();
     echo "<br>";
     echo "La base del triangulo es: ";
     echo  $triangulo->getbasetriangulo();
     echo "<br>";

     echo "El perimetro del triangulo es: ";
     echo $triangulo->perimetrotriangulo();
     echo "<br>";
     echo "El area del triangulo es: ";
     echo $triangulo->areatriangulo();
      ?>

      <hr>
      <h3>circulo</h3>

      <?php
      include 'circulo.php';

      // Nuevo objeto
      $circulo = new circulo();
      echo "El radio del circulo es: ";
      $circulo->setradiocirculo(3);

      echo  $circulo->getradiocirculo();
      echo "<br>";
      echo "El perimetro del circulo es: ";
      echo $circulo->perimetrocirculo();
      echo "<br>";
      echo "El area del circulo es: ";
      echo $circulo->areacirculo();

       ?>

  </body>
</html>
