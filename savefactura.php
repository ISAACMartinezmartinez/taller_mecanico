<?php 

include("db.php");

if(isset($_POST['savefactura'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $fecha=$_POST['fecha'];  //guardo cada dato ingredado
    $repuestos=$_POST['repuestosv'];
    $hora=$_POST['horava']; 
    $iva=$_POST['iva'];
    $servicio=$_POST['idservicio'];
    
    $query="INSERT INTO factura(fecha_generacion, valor_repuestos, valor_hora_servicio, porcentaje_IVA, id_servicio ) VALUES ('$fecha', '$repuestos', '$hora', '$iva','$servicio')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: factura.php");
}

?>