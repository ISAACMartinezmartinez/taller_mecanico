<?php 

include("db.php");

if(isset($_POST['saverepuesto'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $referencia=$_POST['referencia'];  //guardo cada dato ingredado
    $descripcion=$_POST['descripcion'];
    $marca=$_POST['marca']; 
    $precio=$_POST['precio'];
    
    $query="INSERT INTO repuesto(referencia, descripcion_repuesto, marca_repuesto, precio) VALUES ('$referencia', '$descripcion', '$marca', '$precio')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail"+ $result);
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: repuesto.php");
}

?>