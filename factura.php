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
                            <center> <h1>Factura</h1></center>

                            <div class="card card-body">

                                <form action="savefactura.php" method="POST">

                                    <div class="form-group">

                                        <p>
                                            <input type="date" name="fecha" class="form-control" placeholder="Fecha de la factura" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="repuestosv" class="form-control" placeholder="Valor de los Repuestos" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="horava" class="form-control" placeholder="Costo de Hora por Servicio" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="iva" class="form-control" placeholder="Porcentaje Iva" autofocus>
                                        </p>
                                        <p>
                                            <input type="text" name="idservicio" class="form-control" placeholder="Id Servicio" autofocus>
                                        </p>

                                    </div>
                                    <input type="submit" class="btn btn-success btn block" name='savefactura' value="Enviar">
                                </form>
                            </div>
                </div>

                <div class="col-md-8">

                    <table class="table table-border">

                        <thead>
                            <tr>
                                <th>Fecha de la Factura</th>
                                <th>Valor de las Refacciones</th>
                                <th>Valor de la Hora por Servicio</th>
                                <th>Porcentaje del IVA </th>
                                <th>Id Servicio</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                        $query = "SELECT *  FROM factura";
                        $result_usuario = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                                <!--recorro mi tabla usuario-->
                                <tr>
                                    <td>
                                        <?php echo $row['fecha_generacion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['valor_repuestos']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['valor_hora_servicio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['porcentaje_IVA']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['id_servicio']; ?>
                                    </td>
                                    <td>
                                        <a href="deletefactura.php?id_factura=<?php echo $row['id_factura'] ?>">Eliminar</a>
                                    </td>
                                </tr>
                                
                                <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </main>

        <?php include('includes/footer.php'); ?>
