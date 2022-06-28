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
                            <center> <h1>Repuesto y Servicio</h1></center>

                            <div class="card card-body">

                                <form action="saverepuestose.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="repuesto" class="form-control" placeholder="Id Repuesto" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="cantidad" class="form-control" placeholder="Cantidad" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus>
                                        </p>
                                        <p>
                                            <input type="date" name="fecha" class="form-control" placeholder="Fecha" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="servicio" class="form-control" placeholder="Servicio" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='saverepuestose' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>ID Repuesto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Fecha</th>
                                <th>ID Servicio</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM repuestose";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['id_repuesto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['cantidad']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['precio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fecha_registro']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_servicio']; ?>
                                    </td>
                                    <td>
                                        <a href="deleterepuestose.php?id_servicio_repuesto=<?php echo $row['id_servicio_repuesto'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
