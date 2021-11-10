<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Formulario</title>

</head>
<body>
    <div class="container">
        <form action="index.php" method="post"> 
            <br>
            <p> Nombre: <input type="text" name="Nombre" /></p>
            <p>Ciclo:
                DAW<input type="radio" name="ciclo" value="1">
                DAM<input type="radio" name="ciclo" value="2">
                ASIR<input type="radio" name="ciclo" value="3">
            </p>
            <p> Curso:
                primero <input type="checkbox" name="curso" value="primero">
                segundo <input type="checkbox" name="curso" value="segundo">
            </p>
            <p>
                Horario
                <select name="horario" size="1">
                    <option value="man">Mañana</option>
                    <option value="tarde">Tarde</option>
                    <option value="online">Online</option>
                </select>
            </p>


            <p> Observaciones
                <textarea name="Observaciones" cols="width" rows="height" wrap="type">
        </textarea>
            </p>
            <p><input type="submit" value="Enviar" name="B1"></p>
        </form>
</body>
</html>