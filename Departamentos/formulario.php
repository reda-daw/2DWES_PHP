

<!doctype html>

<html>

<head>

<meta charset="utf-8"> 

<title>Empresa-Departamentos</title> 

</head> 
<?php
  include_once ('datos.php');
  
  //Crear un array para almacenar los departamentos (únicos)
  $departamentos=array();
  //$contador = 0;
  //Recorrer el array de empresas
  foreach($empresas as $empresa){
      
      //Por cada empresa, preguntar si el array departametnos 
      //contiene el departamento
       //Si no lo contiene, se añade el departamento al array
      if(!in_array( $empresa['DEPARTAMENTO'],$departamentos)){
          //$departamentos[$contador]= $empresa['DEPARTAMENTO'];
          //$contador++;
          array_push($departamentos, $empresa['DEPARTAMENTO']);
      }
      //Si lo contiene, no hago nada

  } // fin del foreach de empresas

  //print_r($departamentos);

  

?>
<body>

<form method="post" action="buscar.php">

<p>Departamento: 
    
   <?php
        echo "<select name='departamento'>";
        foreach($departamentos as $departamento){
            echo "<option value='".$departamento."'>".$departamento."</option>";
        }
        echo "</select>";
   ?>

</p>

<p><input type="submit" value="Buscar" name="B1"></p>

</form>

</body>

</html>