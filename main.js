$(document).ready(function () {
  tablaPostulantes = $('#tablaPostulantes').DataTable({
    "columnDefs": [{
        "targets": -1,
        "data": null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
      }],

    //Para cambiar el lenguaje a español
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast":"Último",
            "sNext":"Siguiente",
            "sPrevious": "Anterior"
         },
         "sProcessing":"Procesando...",
    }
});


  //boton NUEVO
  $('#btnNuevo').click(function() {
    $('#formPostulantes').trigger('reset');                  //Limpia el formulario Modal
    $('.modal-header').css('background-color', '#28a745');
    $('.modal-header').css('color', 'white');
    $('.modal-title').text('Nuevo Postulante');
    $('#modalCRUD').modal('show');
    id = null;
    opcion = 1; //alta
  });

  var fila            //capturar la fila para editar o borrar el registro

  //botón EDITAR
  $(document).on('click', '.btnEditar', function () {
    fila = $(this).closest('tr');
    id = parseInt(fila.find('td:eq(0)').text());
    ci = parseInt(fila.find('td:eq(1)').text());
    nombres = fila.find('td:eq(2)').text();
    ape_paterno = fila.find('td:eq(3)').text();
    ape_materno = fila.find('td:eq(4)').text();
    genero = fila.find('td:eq(5)').text();
    edad = fila.find('td:eq(6)').text();
    telefono = fila.find('td:eq(7)').text();

    $('#ci').val(ci);
    $('#nombres').val(nombres);
    $('#ape_paterno').val(ape_paterno);
    $('#ape_materno').val(ape_materno);
    $('#genero').val(genero);
    $('#edad').val(edad);
    $('#telefono').val(telefono);
    opcion = 2; //editar

    //Estilo del Modal
    $('.modal-header').css('background-color', '#007bFF');
    $('.modal-header').css('color', 'white');
    $('.modal-title').text('Editar Postulante');
    $('#modalCRUD').modal('show');
  });

  //botón BORRAR
  $(document).on('click', '.btnBorrar', function () {
    fila = $(this);
    id = parseInt($(this).closest('tr').find('td:eq(0)').text());
    opcion = 3; //borrar
    
    var respuesta = confirm('¿Está seguro de eliminar el registro: ' + id + '?');
    if (respuesta) {
      $.ajax({
        url: '../bd/crud.php',
        type: 'POST',
        dataType: 'json',
        data: { opcion:opcion, id:id },
        success: function () {
          tablaPostulantes.row(fila.parents('tr')).remove().draw();
        }
      });
    }
  });



  $('#formPostulantes').submit(function (e) {
    e.preventDefault();
    ci = $.trim($('#ci').val());
    nombres = $.trim($('#nombres').val());
    ape_paterno = $.trim($('#ape_paterno').val());
    ape_materno = $.trim($('#ape_materno').val());
    genero = $.trim($('#genero').val());
    edad = $.trim($('#edad').val());
    telefono = $.trim($('#telefono').val());
    $.ajax({
      url: '../bd/crud.php',
      type: 'POST',
      dataType: 'json',
      data: {id:id, ci:ci, nombres:nombres, ape_paterno:ape_paterno, ape_materno:ape_materno, genero:genero, edad:edad, telefono:telefono, opcion:opcion},
      
      success: function (data) {
        console.log(data);
        id = data[0].id;
        ci = data[0].ci;
        nombres = data[0].nombres;
        ape_paterno = data[0].ape_paterno;
        ape_materno = data[0].ape_materno;
        genero = data[0].genero;
        edad = data[0].edad;
        telefono = data[0].telefono;
        if (opcion == 1) {tablaPostulantes.row.add([id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono]).draw();} 
        else {tablaPostulantes.row(fila).data([id, ci, nombres, ape_paterno, ape_materno, genero, edad, telefono]).draw();}
      }
    });
    $('#modalCRUD').modal('hide');
});
});
