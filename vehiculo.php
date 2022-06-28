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
                            <center> <h1>Vehiculo</h1></center>

                            <div class="card card-body">

                                <form action="savevehiculo.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="cliente" class="form-control" placeholder="ID Cliente" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="modelo" class="form-control" placeholder="Modelo" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="color" class="form-control" placeholder="Color" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="marca" class="form-control" placeholder="Marca" autofocus>
                                        </p>
                                        <p>
                                            <input type="date" name="fechae" class="form-control" placeholder="Fecha de Entrada" autofocus>
                                        </p>
                                        <p>
                                            <input type="date" name="fechas" class="form-control" placeholder="Fecha de salida" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='savevehiculo' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Marca</th>
                                <th>Fecha de Entrada</th>
                                <th>Fecha de Salida</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM vehiculo";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['id_cliente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['modelo']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['color']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['marca']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fecha_entrada']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fecha_salida']; ?>
                                    </td>
                                    <td>
                                        <a href="deletevehiculo.php?id_matricula=<?php echo $row['id_matricula'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
