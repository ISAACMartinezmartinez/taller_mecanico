<?php
    include('db.php');

    if (isset($_GET['id_servicio_repuesto'])) {
        $id = $_GET['id_servicio_repuesto'];
        $query = "DELETE FROM repuestose WHERE id_servicio_repuesto = $id"; //eliminar lo que esté almacenado en el id que me da la variable
        $result = mysqli_query($conn, $query);

        if (!$result) {

            die("Fail"); //si no existe resultado mostrar mensaje fail
        }
            // si si existe mostar un mensaje y volver a la pàgina principal

        $_SESSION['message'] = 'Los datos se eliminaron satisfactoriamente.';
        $_SESSION['message_type'] = 'danger'; //color del mensaje
        header('Location: repuesto.php');  
    }

?>