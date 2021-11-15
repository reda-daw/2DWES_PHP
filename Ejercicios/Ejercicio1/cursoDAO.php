<?php

include_once 'conexion.php';

function obtenerCursos(){

    $conexion = obtenerConexionBD();
    $cursos=array();


    try {
        // Establecemos el modo de error de PDO para que salten excepciones
        $sql =  "SELECT id, nombre FROM curso";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();

         //OPCIÓN 1 

        foreach($stmt as $row){

            $cursos[] = $row;

           }


        //OPCIÓN 2
          
         // $cursos = $stmt->fetchAll();


    } catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

    }

    $conexion = null;

    return $cursos;
}


?>