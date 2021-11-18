<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#" />

    <title>RR.HH. Evaluación Postulantes</title>

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../css/main3.css">

    <!--Antes del Morris-->

    <!--Libreria jQuery-->
    <script src="../libs/jquery.min.js"></script>

    <!--Libreria Raphael-->
    <script src="../libs/raphael-min.js"></script>

    <!--Librerias Morris-->
    <link rel="stylesheet" href="../libs/morris.css" />
    <script src="../libs/morris.min.js" charset="utf-8"></script>

    <!--Bootstrap-->
    <link rel="stylesheet" href="../libs/bootstrap.min.css" />
    <link rel="stylesheet" href="../libs/bootstrap.min.css.map" />

    <title>Grafico de Lineas</title>
</head>

<body>
    <header>
        <h2 class="text-center text-white">RESULTADOS DE LOS POSTULANTES</h2>
    </header>

    <br>
    <!--Boton de regreso al Menú-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="pag_inicio.php" class="btn btn-dark" role="button">Menú Inicio</a>
            </div>

        </div>
    </div>
    

    <!--Inicio del código para los graficos de los Postulantes-->
    
    <div class="container">
        
        <hr />

        <div class="row">
            <!--Postulante 1-->
            <div class="col-md-6">
                <center><h3>Postulante #1</h3></center>
                <hr />
                <div id="postulante_1"></div>
            </div>

            <!--Postulante 2-->
            <div class="col-md-6">
            <center><h3>Postulante #2</h3></center>
                <hr />
                <div id="postulante_2"></div>
            </div>

            <!--Comparativa de ambos postulantes-->
            <div class="col-md-12">
            <hr>
            <br>    
            <center><h3>Comparativa de Postulantes #1 y #2</h3></center>
                <hr />
                <div id="postulante_3"></div>
            </div>
            <hr>
            <br>
            <br>
            

        </div>
    </div>









    <!-- JavaScript para el color del marco superior -->
    <script type="text/javascript" src="../main2.js"></script>
    <!--JavaScript de las Lineas-->
    <script src="../lineas/lineas.js" charset="utf-8"></script>


</body>

</html>