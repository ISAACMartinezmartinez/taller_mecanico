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
                            <center> <h1>Repuesto</h1></center>

                            <div class="card card-body">

                                <form action="saverepuesto.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="text" name="referencia" class="form-control" placeholder="Referencia" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del Repuesto" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="marca" class="form-control" placeholder="Marca del Repuesto" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="precio" class="form-control" placeholder="Precio" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='saverepuesto' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM repuesto";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['referencia']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['descripcion_repuesto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['marca_repuesto']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['precio']; ?>
                                    </td>
                                    <td>
                                        <a href="deleterepuesto.php?id_repuesto=<?php echo $row['id_repuesto'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
