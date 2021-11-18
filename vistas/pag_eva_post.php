<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, ci, nombres, ape_paterno, ape_materno FROM postulantes";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />

    <title>RR.HH. Evaluación Postulantes</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../main2.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css" />
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <header>
        <h2 class="text-center text-white">EVALUACIÓN DE POSTULANTES</h2>
    </header>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="pag_inicio.php" class="btn btn-dark" role="button">Menú Inicio</a>
            </div>

        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPostulantes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>CI</th>
                                <th>Nombres</th>
                                <th>Ape Paterno</th>
                                <th>Ape Materno</th>

                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $dat) {
                            ?>
                                <tr>
                                    <td><?php echo $dat['id'] ?></td>
                                    <td><?php echo $dat['ci'] ?></td>
                                    <td><?php echo $dat['nombres'] ?></td>
                                    <td><?php echo $dat['ape_paterno'] ?></td>
                                    <td><?php echo $dat['ape_materno'] ?></td>

                                    <td></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>



    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formPostulantes">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="ci" class="col-form-label">CI:</label>
                            <input type="text" class="form-control" id="ci">
                        </div>


                        <!-- Primera variable -->
                        <div class="slidecontainer">
                            <label for="form_acad" class="col-form-label">Formación Academica:</label><br>                            
                            <label text-align="center">Baja....................................................................................................................Alta</label>
                            <input type="range" min="1" max="100" value="50" class="slider" id="form_acad">
                            <!--
                            <p>Value: <span id="demo"></span></p>
                            -->
                        </div>

                        <!-- Script para mostrar el valor de la Barra
                        <script>
                            var slider = document.getElementById("myRange");
                            var output = document.getElementById("demo");
                            output.innerHTML = slider.value;

                            slider.oninput = function() {
                                output.innerHTML = this.value;
                            }
                        </script>
                        -->
                        
                        <!-- 2da Variable -->
                        <div class="slidecontainer">
                            <label for="exp_gral" class="col-form-label">Experiencia laboral general:</label>
                            <label text-align="center">Baja....................................................................................................................Alta</label>
                            <input type="range" min="1" max="100" value="50" class="slider" id="exp_gral">
                        </div>

                        <!-- 3ra Variable -->
                        <div class="slidecontainer">
                            <label for="exp_area" class="col-form-label">Experiencia en el área:</label>
                            <label text-align="center">Baja....................................................................................................................Alta</label>
                            <input type="range" min="1" max="100" value="50" class="slider" id="exp_area">
                        </div>

                                               


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../datatables/datatables.min.js"></script>

    <script type="text/javascript" src="../main2.js"></script>


</body>

</html>