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
                            <center> <h1>Servicio</h1></center>

                            <div class="card card-body">

                                <form action="saveservicio.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcio del Servicio" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="cantidadh" class="form-control" placeholder="Cantidad Horas" autofocus>
                                        </p>
                                        <p>
                                            <input type="date" name="fecha" class="form-control" placeholder="Fecha de Ingreso" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="empleado" class="form-control" placeholder="Empleado" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="placa" class="form-control" placeholder="Placa" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="matricula" class="form-control" placeholder="Matricula" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='saveservicio' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Descripcio</th>
                                <th>Horas</th>
                                <th>Fecha de Ingreso</th>
                                <th>Empleado</th>
                                <th>Placa</th>
                                <th>Matricula</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM servicio";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['descripcion_servicio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cantidad_horas']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fechahora_ingreso_vehiculo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_empleado']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['placa']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_matricula']; ?>
                                    </td>
                                    <td>
                                        <a href="deleteservicio.php?id_servicio=<?php echo $row['id_servicio'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
