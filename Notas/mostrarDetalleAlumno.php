<?php

include_once 'datosAlumnos.php';

$id;
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

echo "Alumno:".$id;
$tabla =  mostrarTablaNotasAlumno($id,$alumnos);

echo $tabla;

function mostrarTablaNotasAlumno($id,$listaAlumnos){

    $html = '<table>';
    $html .=  '<tr>';
    $html .= '<td>Materia</td><td>Nota</td>';
    $html .= '</tr>';
    $media = 0;
    foreach($listaAlumnos as $alumno){
        
        if($alumno["id"]==$id){

            foreach($alumno["notas"] as $nota){

                $html .= '<tr>';
                $html .= 
                        '<td>Materia</td>
                        <td>'.$nota.'</td>';
        
                $html .= '</tr>';

            }

        }
    
    
    }

    $html .= '</table>';
    return $html;

}


?>