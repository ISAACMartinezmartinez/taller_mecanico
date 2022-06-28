<?php 

include("db.php");

if(isset($_POST['save'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $nombre=$_POST['nombre'];  //guardo cada dato ingredado
    $apellidos=$_POST['apellidos'];
    $dirrecion=$_POST['dirrecion']; 
    $telefono=$_POST['telefono'];

    $query="INSERT INTO cliente(nombre_cliente, apellido_cliente, direccion_cliente, telefono_cliente ) VALUES ('$nombre', '$apellidos', '$dirrecion', '$telefono')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}

?>