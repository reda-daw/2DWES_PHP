<?php
include_once 'conexion.php';

// Comprobar la conexión
if (!$conexion) {
die("Error en la conexión: " . mysqli_connect_error());
}

$sql = "SELECT id, nombre, numero,email FROM participantes";

// OPCIÓN 1
$resultado = $conexion->query($sql);


// OPCIÓN 2
// mysqli no usa búfer
//$resultado = mysqli_query($conexion, $sql);


// OPCIÓN 3
// mysqli usando búfer
//$resultado = mysqli_query($conexion, $sql, MYSQLI_STORE_RESULT);


if ($resultado->num_rows > 0) {
// se muestra los datos de cada fila
while($row = $resultado->fetch_assoc()) {
  echo "Id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Número: " . $row["numero"]. " - Email: " . $row["email"]. "<br>";
}
} else {

echo "No hay resultados";

}

$conexion->close();


?>