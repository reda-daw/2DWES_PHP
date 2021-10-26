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

<?php

$empleado = "";
$horas = "";
$valorHora = "";

if(isset($_POST['empleado'])){

    $empleado = $_POST['empleado'];

}
if(isset($_POST['horas'])){

    $horas = $_POST['horas'];

}
if(isset($_POST['categoria'])){

    $idCategoria = $_POST['categoria'];

}


$categorias = array(

    array("id"=>1,"nombre"=>"Jefe","valor"=>50),
    array("id"=>2,"nombre"=>"Administrativo","valor"=>30),
    array("id"=>3,"nombre"=>"Operario","valor"=>30),
    array("id"=>4,"nombre"=>"Becario","valor"=>6)

    );


function calcularBruto($horas, $valorHora){

    $bruto = $horas * $valorHora;

    return $bruto;
}

function calcularDescuento($bruto,$porcentaje_dto){

    $descuento = $bruto * $porcentaje_dto;

    return $descuento;
}

function calcularSalarioNeto($bruto,$descuento){
    
    $salarioNeto = $bruto - $descuento;

    return $salarioNeto;
}


?>



<div class="container">

<form action="formularioSalario.php" method="post">  


    <p> Empleado: <input type="text" name="empleado" value="<?php echo $empleado ?>"/>  

    </p>
    <p> Horas: <input type="text" name="horas" value="<?php echo $horas ?>"/>  

    </p>

    <p>  

        Categoria

        <select name="categoria" size="1">

        <?php

            foreach($categorias as $categoria){
                
                $seleccion ="";
                if($idCategoria==$categoria['id']){
                    $seleccion = "selected";
                    $valorHora = $categoria['valor'];
                }
                echo '<option value="'.$categoria['id'].'"  '.$seleccion.'>'.$categoria['nombre'].'</option>';
            }
            
        ?>
         

        </select>


        <?php

                echo '<p>  
                Salario bruto ';
                
                if($horas!=""){
                    $bruto = calcularBruto($horas,$valorHora);
                    echo $bruto.' €';
                }else{
                    echo "0 €";
                }       
                echo '</p>';   
                
                echo '<p>  
                Descuento ';
                
                if($horas!=""){
                    $descuento = calcularDescuento($bruto,0.15);
                    echo $descuento.' €';
                }else{
                    echo "0 €";
                }       
                echo '</p>'; 

                echo '<p>  
                Salario neto ';
                if($horas!=""){
                    $salarioNeto = calcularSalarioNeto($bruto,$descuento);
                    echo $salarioNeto.' €';
                }else{
                    echo "0 €";
                }       
                echo '</p>'; 

        ?>
    </p>
    

    <p><input type="submit" value="Calcular" ></p>
    <p><input type="reset" value="Limpiar" ></p>
</form>

</body>

</html>