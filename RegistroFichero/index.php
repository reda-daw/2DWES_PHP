<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
   <form action="index.php" method="post">

   <?php
 //Definición del nombre del archivo
 $archivo = "registro.txt";


 //Verificando la existencia del archivo
 if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

 }else{

   //Abriendo en forma de lectura
   $abrir = fopen($archivo, "a+");


 //Imprimir el contenido del archivo
 $contenido = "Registro realizado el: ".date("d/m/Y - G:i:s". PHP_EOL);
    fwrite ($abrir,$contenido);
    fclose($abrir);
 }

?>



   <button id="enviar">Enviar</button>
   </form>
</body>
</html>