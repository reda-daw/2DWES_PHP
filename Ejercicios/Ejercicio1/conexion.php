<?php
include_once 'datosconexionBD';
// Carga la configuración
// $config = parse_ini_file('datosBD.ini');

function obtenerConexionBD($BD=''){

    /* Intentamos establecer una conexión con el servidor.*/
    try {
        if ($BD==''){
            $conexion = new PDO("mysql:host=".SERVIDOR.";charset=utf8", USUARIO, CLAVE);
           }
           else{
            $conexion  = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . $BD.";charset=utf8", USUARIO, CLAVE);
           }

           /* Establecemos atributos para configurar la conexión PDO*/
           $conexion ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
           $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           echo "<p>Conexión realizada con PDO";

           return($conexion );

       } catch (PDOException $e) {
           die ("<p><H3>No se ha podido establecer la conexión.
                <p>Compruebe si está activado el servidor de bases dedatos MySQL.</H3></p>\n <p>Error: ". $e->getMessage()."</p>\n");
           exit();

       } // end try

   }
