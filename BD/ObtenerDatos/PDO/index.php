<?php

include_once 'conexion.php';

try {
      //Sentencia de la consulta
      $sql = "SELECT id, nombre, numero, email FROM participantes";
      //Ejecutar la sentencia
      $result = $conexion->query($sql);

       //OPCION 1
       foreach($result as $row){

       //OPCION 2
       //while ($row = $result->fetch(PDO::FETCH_ASSOC)){

      echo "Id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Número: " .   $row["numero"]. " - Email: " . $row["email"]. "<br>";
      echo "<br/>";

      }


    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();

      }
       $conexion = null;

?>