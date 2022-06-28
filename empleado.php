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
                            <center> <h1>Empleado</h1></center>

                            <div class="card card-body">

                                <form action="saveempleado.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="cedulaE" class="form-control" placeholder="Cedula de Empleado" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de Empleado" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="apellido" class="form-control" placeholder="Apellidos de Empleado" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="cargo" class="form-control" placeholder="Cargo" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="precio" class="form-control" placeholder="Precio por Hora" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="total" class="form-control" placeholder="Total" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="estado" class="form-control" placeholder="Estado" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='saveempleado' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Cedula Empleado</th>
                                <th>Nombre Empleado</th>
                                <th>Apellidos Empleado</th>
                                <th>Cargo</th>
                                <th>Precio Hora</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM empleado";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['cedula_empleado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombre_empleado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellido_empleado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cargo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['precio_hora']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cantidad']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['total']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_estado']; ?>
                                    </td>
                                    <td>
                                        <a href="deleteempleado.php?id_empleado=<?php echo $row['id_empleado'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
