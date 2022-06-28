<?php 

include("db.php");

if(isset($_POST['saveestado'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $descripcion=$_POST['descripcion'];  //guardo cada dato ingredado

    $query="INSERT INTO estado(descripcion_estado ) VALUES ('$descripcion')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: estado.php");
}

?>