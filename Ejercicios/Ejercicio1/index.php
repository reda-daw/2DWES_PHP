<?php

include_once 'datosconexionBD.php';
try {

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
    // Establecemos el modo de error de PDO para que salten excepciones
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparar y vincular parámetros

    $stmt = $con->prepare("INSERT INTO alumno (Nombre,Ciclo,Curso,Horario,Observaciones) VALUES (:Nombre,:Ciclo,:Curso,:Horario,:Observaciones)");
     $stmt->bindParam(':Nombre', $Nombre);
     $stmt->bindParam(':Ciclo', $Ciclo);
     $stmt->bindParam(':Curso', $Curso);
     $stmt->bindParam(':Horario', $Horario);
     $stmt->bindParam(':Observaciones', $Observaciones);

     // establecemos los parámetros y ejecutamos para insertar

    $Nombre = '';
    $Ciclo = '';
    $Curso = '';
    $Horario = '';
    $Observaciones = '';

    if (isset($_POST['Nombre'])){
        $Nombre = $_POST['Nombre'];
    }

    if (isset($_POST['Ciclo'])){
        $Ciclo = $_POST['Ciclo'];
    }

    if (isset($_POST['Curso'])){
        $Curso = $_POST['Curso'];
    }

    if (isset($_POST['Horario'])){
        $Horario = $_POST['Horario'];
    }

    if (isset($_POST['Observaciones'])){
        $Observaciones = $_POST['Observaciones'];
    }


    $stmt->execute();
    
    echo "Nuevas filas insertadas correctamente";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$con = null;
?>