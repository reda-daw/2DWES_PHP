<?php

include_once 'estilos.php';
include_once 'datosAlumnos.php';

/*
echo '<pre>';
print_r($alumnos);
echo '</pre>';
*/


$tabla = mostrarTablaAlumnos($alumnos);
echo $tabla;

function mostrarTablaAlumnos($listaAlumnos){

    $html = '<table>';
    $html .=  '<tr>';
    $html .= '<td>Id</td><td>Alumno</td><td>Notas</td><td></td><td></td>';
    $html .= '</tr>';
    $media = 0;

    foreach($listaAlumnos as $alumno){

        //CALCULAMOS LA MEDIA
        $media = calcularMedia($alumno['notas']);
    

    $texto = "";
    $estilo = "aprobado";
    // COMPROBAMOS QUE LA MEDIA ESTÁ APROBADA O NO
    if($media>=5){
        $texto = "Enhorabuena";

    }else{
        $texto = "Nos vemos en junio";
        $estilo = "noAprobado";
    }
    //IMPRIMIR LA FILA
    $html .= '<tr>';
    $html .= '<td>'.$alumno["id"].
             '</td><td>'.$alumno["nombre"].
             '</td><td class="'.$estilo.'">'.$media.'</td>';
    
    $html .= '<td><a href="mostrarDetalleAlumno.php?id='.$alumno['id'].'">Ver detalle</a></td>';
    $html .=  '<td>'.$texto.'</td>';
    $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;

}

function calcularMedia($notas){
    $total = 0;
    foreach($notas as $nota){
        $total += $nota;
    }
    $media = $total / count($notas);

    return  $media;
}

?>