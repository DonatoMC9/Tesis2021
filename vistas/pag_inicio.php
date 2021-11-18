<?php
session_start();

if ($_SESSION["s_usuario"] === null) {
    header("Location: ../index.php");
}

?>
<!doctype html>
<html>

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login con PHP - Bootstrap 4</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos.css">
    <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">

                    <h1 class="display-4 text-center">¡Bienvenido!</h1>
                    <h2 class="text-center">Usuario: <span class="badge badge-dark"><?php echo $_SESSION["s_usuario"]; ?></span></h2>
                    <p class="lead text-center">Registro, Evaluación y Selección.</p>

                    <div class="row">
                        <div class="col">
                            <a href="pag_reg_post.php"> <img src="../images/registro.png" class="img-thumbnail" alt="Registro"></a>
                            <p class="lead text-center">- Registro del Postulante</p>
                        </div>

                        <div class="col">
                            <a href="pag_eva_post.php"> <img src="../images/evaluacion.png" class="img-thumbnail" alt="Evaluación"></a>
                            <p class="lead text-center">- Evaluación del Postulante</p>
                        </div>
                        
                        <div class="col">
                            <a href="pag_sel_post.php"> <img src="../images/seleccion.png" class="img-thumbnail" alt="Selección"></a>
                            <p class="lead text-center">- Resultados de los Postulante</p>
                        </div>
                        
                    </div>

                    <hr class="my-4">
                    <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../jquery/jquery-3.3.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../popper/popper.min.js"></script>

    <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="../codigo.js"></script>
</body>

</html>