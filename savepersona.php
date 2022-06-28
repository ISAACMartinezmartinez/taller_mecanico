<?php 

include("db.php");

if(isset($_POST['savepersona'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $cedula=$_POST['cedula'];  //guardo cada dato ingredado
    $nombre=$_POST['nombre'];
    $apellidop=$_POST['apellido1']; 
    $apellidom=$_POST['apellido2'];
    
    $query="INSERT INTO persona(cedula, nombre, apellido_1, apellido_2) VALUES ('$cedula', '$nombre', '$apellidop', '$apellidom')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail"+ $result);
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: persona.php");
}

?>