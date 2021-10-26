<?php

include_once ('datos.php');

if(isset($_POST['departamento']))
{
      $departamento = $_POST['departamento'];
     
}


$contador = 0;
foreach($empresas as $empresa){
    if($departamento==$empresa['DEPARTAMENTO']){
        $contador++;
    }
}

echo "Existen ".$contador." departamentos de ".$departamento;

?>