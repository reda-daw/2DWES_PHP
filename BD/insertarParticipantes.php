<?php
// Crear una conexion
// En la conexión, indicamos la base de datos que queremos utilizar.
include_once 'conexion.php';
$config = parse_ini_file('datosBD.ini');
$conexionMYSQLI = obtenerConexionMysql($config);
$conexionPDO = obtenerConexionBD($config);

// Comprobar la conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
    }
    
    //CONSTRUIMOS LA SENTENCIA SQL
    $sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Reda', 23, 'reda@ies.es')";
    
    //EJECUTAMOS LA SENTENCIA
    if (mysqli_query($conexionMYSQLI, $sql)) {
    echo "<p>Nueva fila creada con éxito";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexionMYSQLI);
    }
    
    // CERRAR LA CONEXIÓN
    mysqli_close($conexionMYSQLI);


    $sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Luis', 23, 'luismr@ies.es')";
    // se usa exec() porque la sentencia no devuelve ningún valor
 try{
    $conexionPDO->exec($sql);
    echo "<p>Nueva fila creada correctamente";
 
    }catch(PDOException $e) {
 
    echo $sql . "<br>" . $e->getMessage();
 
    }
 
  $conexionPDO = null;
    
    
    ?>