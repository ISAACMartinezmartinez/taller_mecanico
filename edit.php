<?php
include("db.php");

if (isset($_POST['update'])) {
  $id = $_GET['id_cliente'];
  $nombre= $_POST['nombre'];
  $apellidos= $_POST['apellidos'];
  $dirrecion= $_POST['dirrecion'];
  $telefono = $_POST['telefono'];
  $query = "UPDATE cliente set nombre_cliente = '$nombre', apellido_cliente = '$apellidos', direccion_cliente = '$dirrecion', telefono_cliente = '$telefono' WHERE id_cliente=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id_cliente']; ?>" method="POST">
        <div class="form-group">
        <p>
                                            <p>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Cliente" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="dirrecion" class="form-control" placeholder="Dirrecion" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="telefono" class="form-control" placeholder="Telefono" autofocus>
                                        </p>
                                    </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>