<?php include('db.php'); ?>

    <?php include('includes/header.php'); ?>

        <main class="container p-4">
            <div class="row">

                <div class="col-md-4">

                    <?php if(isset ($_SESSION['message'])) {?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?=$_SESSION['message'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <!--mensaje de alerta con bootstrap-->
                        <?php session_unset(); } ?>
                            <!--cierra el mesaje de alerta al refrescar la página-->
                            <center> <h1>Cliente</h1></center>

                            <div class="card card-body">

                                <form action="save.php" method="POST">

                                    <div class="form-group">

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
                                    <input type="submit" class="btn btn-success btn block" name='save' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Nombre Cliente</th>
                                <th>Apellido Cliente</th>
                                <th>Dirrecion Cliente</th>
                                <th>Telefono Cliente</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM cliente";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['nombre_cliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellido_cliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['direccion_cliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['telefono_cliente']; ?>
                                    </td>
                                    <td>
                                        <a href="delete.php?id_cliente=<?php echo $row['id_cliente'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
