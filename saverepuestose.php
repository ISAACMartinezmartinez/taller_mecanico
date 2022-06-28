<?php 

include("db.php");

if(isset($_POST['saverepuestose'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $repuesto=$_POST['repuesto'];  //guardo cada dato ingredado
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio']; 
    $fecha=$_POST['fecha'];
    $servicio=$_POST['servicio'];
    
    $query="INSERT INTO repuestose(id_repuesto, cantidad, precio, fecha_registro,id_servicio) VALUES ('$repuesto', '$cantidad', '$precio', '$fecha','$servicio')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail"+ $result);
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: repuestosse.php");
}

?>