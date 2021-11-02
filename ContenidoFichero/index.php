<?php
 //Definición del nombre del archivo
 $archivo = "formatos.txt";


 //Verificando la existencia del archivo
 if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

 }else{

   //Abriendo en forma de lectura
   $abrir = fopen($archivo, "r");


 //Obtener el contenido a partir de la lectura
 $contenido = fread($abrir, filesize($archivo));
 //Imprimir el contenido del archivo
 echo $contenido;

 }

?>