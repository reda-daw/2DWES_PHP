<?php

include_once 'conexion.php';
// Carga la configuración
$config = parse_ini_file('datosBD.ini');

obtenerConexionMysql($config);

obtenerConexionBD();
?>