<?php 

include("db.php");

if(isset($_POST['saveempleado'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $cedula=$_POST['cedulaE'];
    $nombre=$_POST['nombre'];  //guardo cada dato ingredado
    $apellidos=$_POST['apellido'];
    $cargo=$_POST['cargo']; 
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];
    $total=$_POST['total'];
    $estado=$_POST['estado'];

    $query="INSERT INTO empleado(cedula_empleado, nombre_empleado, apellido_empleado, cargo, precio_hora, cantidad, total, id_estado ) VALUES ('$cedula', '$nombre', '$apellidos', '$cargo','$precio','$cantidad', '$total','$estado' )"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: empleado.php");
}

?>