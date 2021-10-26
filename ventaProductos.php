<?php

include_once 'cabecera.php';


$IdProducto = "";
$valorProducto = 0;
$cantidad = 0;
$total = 0;

if(isset($_POST['producto'])){
    $IdProducto = $_POST['producto'];
}
if(isset($_POST['cantidad'])){
    $cantidad = $_POST['cantidad'];
   
}

if(isset($_POST['total'])){
    $total = $_POST['total'];
   
}


$productos = array(

    array("id"=>1,"nombre"=>"Lavadora","valor"=>200),
    array("id"=>2,"nombre"=>"Frigorífico","valor"=>350),
    array("id"=>3,"nombre"=>"Lavavajillas","valor"=>150),
    array("id"=>4,"nombre"=>"Tostadora","valor"=>20)

    );




?>


<div class="container">

<h1>Venta de productos</h1>
<form action="ventaProductos.php" method="post">  

   Productos

        <select name="producto" size="1">

        <?php
           echo '<option value="0" >Producto</option>';
            foreach($productos as $producto){
                
                $seleccion ="";
                if($IdProducto==$producto['id']){
                    $seleccion = "selected";
                    $valorProducto = $producto['valor'];
                }
                echo '<option value="'.$producto['id'].'"  '.$seleccion.'>'.$producto['nombre'].'</option>';
            }
            
        ?>
         

        </select>

    <p> Precio: <input type="text" name="empleado" value="<?php echo $valorProducto?>"/>  

    </p>
    <p> Cantidad: <input type="text" name="cantidad" value="<?php echo $cantidad?>"/>  

    </p>
    <?php $total =  $valorProducto*$cantidad; ?>
    <p> Total: <input type="text" name="total" value="<?php echo $total?>"/>  

</p>

Cuotas

<select name="cuotas" size="1">

<?php

    for($i=1; $i<=12 ; $i++){
        
        echo '<option value="'.$i.'">'.$i.'</option>';
    }

 
    
?>
 

</select>

    <p>  

    
    
    <?php
         //PASO 1
        if($valorProducto==0){
            echo '<p><input type="submit" value="Obtener precio" ></p>';
        }

        //PASO 2
        if($valorProducto>0 && $total==0){
            echo '<p><input type="submit" value="Calcular total" ></p>';
        }
        
        //PASO 3
        if($total>0){
            echo '<p><input type="submit" value="Calcular financiación" ></p>';
        }
    ?>
    
    <p><input type="reset" value="Limpiar" ></p>

        </form>

        </div>


