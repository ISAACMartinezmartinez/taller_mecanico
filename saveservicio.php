<?php 

include("db.php");

if(isset($_POST['saveservicio'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $descripcion=$_POST['descripcion'];  //guardo cada dato ingredado
    $cantidadh=$_POST['cantidadh'];
    $fecha=$_POST['fecha']; 
    $empleado=$_POST['empleado'];
    $placa=$_POST['placa'];
    $matricula=$_POST['matricula'];
    
    $query="INSERT INTO servicio(descripcion_servicio, cantidad_horas, fechahora_ingreso_vehiculo, id_empleado, placa, id_matricula) VALUES ('$descripcion', '$cantidadh', '$fecha', '$empleado', '$placa', '$matricula')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail"+ $result);
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: servicio.php");
}

?>