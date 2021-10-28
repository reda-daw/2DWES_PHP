<?php

if (isset($_POST["id"])) {
    $id=$_POST["id"]; 
  }

if (isset($_POST["tipo"])) {
    $tipo=$_POST["tipo"]; 
  }

if (isset($_POST["marca"])) {
    $marca=$_POST["marca"]; 
  }

if (isset($_POST["carga"])) {
    $carga=$_POST["carga"]; 
  }

if (isset($_POST["capacidad"])) {
    $capacidad=$_POST["capacidad"]; 
  }

if (isset($_POST["ciclo"])) {
    $ciclo=$_POST["ciclo"]; 

  }
  if (isset($_POST["estado"])) {
    $estado=$_POST["estado"]; 

  }

echo "DATOS ENVIADOS".'<br>';  

echo  $id.'<br>';  
echo  $tipo.'<br>'; 
echo  $marca.'<br>'; 
echo  $carga.'<br>'; 
echo  $capacidad.'<br>';
echo  $ciclo.'<br>';
echo  $estado.'<br>'; 

//Abrir el archivo
$archivo = 'baterias.txt';
$abrir = fopen($archivo, 'a');



//Enviar información de los productos
fwrite($abrir, $id);
fwrite($abrir, $tipo);
fwrite($abrir, $marca);
fwrite($abrir, $carga);
fwrite($abrir, $capacidad);
fwrite($abrir, $ciclo);
fwrite($abrir, $estado);

//Cerrar el archivo
fclose($abrir);

?>  