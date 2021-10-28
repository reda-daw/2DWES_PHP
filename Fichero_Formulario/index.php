<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Formulario</title>
</head>
<body>
    <div class="container"></div>
    <form action="datos.php" method="post">
    <p>ID: <input type="text" name="id"/></p>
    <p>Tipo:</p> <select name="tipo" id="tipo">
        <option value="plomo">Plomo-ácido</option>
        <option value="niquel">Níquel-cadmio</option>
        <option value="metalico">Níquel-hidruro metálico</option>
        <option value="ion">Ion-litio</option>
        <option value="ionlitio">Ion-litio con cátodo de LiFePO4</option>
        <option value="polimero">Polímero de litio </option>
    </select>
    <p>Marca: <input type="text" name="marca"/></p>
    <p>Carga: <input type="range" name="carga"/></p>
    <p>Capacidad: <input type="text" name="capacidad"> </p>
    <p>Ciclo de Vida: <input type="text" name="ciclo"> </p>
    <p>Estado: <input type="text" name="estado"> </p>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>