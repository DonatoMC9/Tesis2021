<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$ci = (isset($_POST['ci'])) ? $_POST['ci'] : '';
$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : '';
$ape_paterno = (isset($_POST['ape_paterno'])) ? $_POST['ape_paterno'] : '';
$ape_materno = (isset($_POST['ape_materno'])) ? $_POST['ape_materno'] : '';
$genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1: //crear
        $consulta = "INSERT INTO postulantes (ci, nombres, ape_paterno, ape_materno, genero, edad, telefono) VALUES('$ci', '$nombres', '$ape_paterno', '$ape_materno', '$genero', '$edad', '$telefono')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono FROM postulantes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 2: //modificación
        $consulta = "UPDATE postulantes SET ci='$ci', nombres='$nombres', ape_paterno='$ape_paterno', ape_materno='$ape_materno', genero='$genero', edad='$edad', telefono='$telefono' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono FROM postulantes WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break; 

    case 3: //eliminar
        $consulta = "DELETE FROM postulantes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono FROM postulantes WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    
    case 4: //evaluar
        

}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;

?>