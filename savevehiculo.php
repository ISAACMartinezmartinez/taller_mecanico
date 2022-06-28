<?php 

include("db.php");

if(isset($_POST['savevehiculo'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $descripcion=$_POST['cliente'];  //guardo cada dato ingredado
    $cantidadh=$_POST['modelo'];
    $fecha=$_POST['color']; 
    $empleado=$_POST['marca'];
    $placa=$_POST['fechae'];
    $matricula=$_POST['fechas'];
    
    $query="INSERT INTO vehiculo(id_cliente, modelo, color, marca, fecha_entrada, fecha_salida) VALUES ('$descripcion', '$cantidadh', '$fecha', '$empleado', '$placa', '$matricula')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail"+ $result);
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: vehiculo.php");
}

?>