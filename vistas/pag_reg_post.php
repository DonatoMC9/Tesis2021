<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono FROM postulantes";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  

    <title>RR.HH. Registro Postulantes</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../main.css">  
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">       
  </head>
    
  <body> 
     <header>
        <h2 class="text-center text-white">REGISTRO DE POSTULANTES</h2> 
     </header>    
    
     <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <a href="pag_inicio.php" class="btn btn-dark" role="button">Menú Inicio</a> 
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo Registro</button>                
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
                                <th>Género</th>
                                <th>Edad</th>                                
                                <th>Teléfono</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['ci'] ?></td>
                                <td><?php echo $dat['nombres'] ?></td>
                                <td><?php echo $dat['ape_paterno'] ?></td>
                                <td><?php echo $dat['ape_materno'] ?></td>
                                <td><?php echo $dat['genero'] ?></td>
                                <td><?php echo $dat['edad'] ?></td> 
                                <td><?php echo $dat['telefono'] ?></td>   
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

                <div class="form-group">
                <label for="nombres" class="col-form-label">Nombres:</label>
                <input type="text" class="form-control" id="nombres">
                </div>

                <div class="form-group">
                <label for="ape_paterno" class="col-form-label">Ape Paterno:</label>
                <input type="text" class="form-control" id="ape_paterno">
                </div>

                <div class="form-group">
                <label for="ape_materno" class="col-form-label">Ape Materno:</label>
                <input type="text" class="form-control" id="ape_materno">
                </div>

                
                <div class="form-group">
                <label for="genero" class="col-form-label">Genero:</label>
                <select class="form-control" id="genero">
                <option>---</option>    
                <option>F</option>
                <option>M</option>      
                </select>
                </div>


                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="text" class="form-control" id="edad">
                </div>

                <div class="form-group">
                <label for="telefono" class="col-form-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono">
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
     
    <script type="text/javascript" src="../main.js"></script>  
    
    
  </body>
</html>