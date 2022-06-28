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
                            <center> <h1>Persona</h1></center>

                            <div class="card card-body">

                                <form action="savepersona.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="cedula" class="form-control" placeholder="Cedula" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="apellido1" class="form-control" placeholder="Apellido Paterno" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="apellido2" class="form-control" placeholder="Apellido Materno" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='savepersona' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Matrerno </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM persona";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['cedula']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellido_1']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellido_2']; ?>
                                    </td>
                                    <td>
                                        <a href="deletepersona.php?id_persona=<?php echo $row['id_persona'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
