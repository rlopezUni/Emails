<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar') }}
        </h2>

        <meta name="csrf-token" content="{{ csrf_token() }}">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <!-- ******************************   Inicia tabla   *****************************************-->
<div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">

                    @if (session('enviado'))
                    <div class="alert alert-primary">
                        <strong>{{session('enviado')}}</strong>
                    </div>
                    @endif

                    @if (session('almenos'))
                    <div class="alert alert-danger">
                        <strong>{{session('almenos')}}</strong>
                    </div>
                    @endif

                        <div class="card-header">
                            <center>
                                <h3><b>Lista de Correos</b></h3>
                            </center>
                        </div>

    <form action="" method ="POST">
    @csrf
                            
    <div class="card-footer">
        <br>
                                <div class="col-md-12">

                                        <button id="administrativos" name="administrativos[]" class="btn btn-info">
                                            &nbsp;&nbsp;Marcar Administrativos
                                        </button>
                                    
                                        &nbsp

                                        <button id="docentes" name="docentes[]" class="btn btn-info">
                                            &nbsp;&nbsp;Marcar Docentes
                                        </button>

                                        &nbsp

                                        <button id="todos" name="todos[]" class="btn btn-info">
                                            &nbsp;&nbsp;Marcar Todos
                                        </button>

                                        &nbsp

                                        <button id="limpiar" name="limpiar[]" class="btn btn-info">
                                            &nbsp;&nbsp;Limpiar Todos
                                        </button>
 
                                
                               
                               
                                
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                                

                                    
                                        <button id="envio" name="envio" class="btn btn-success">
                                            &nbsp;&nbsp;Redactar Correo
                                        </button>

                                        
                                   
                                        


                                </div>

                                <div class="col-md-12">

                                        
                                <br>
                               
                               
                                
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                

                                        <button id="descargar" name="descargar" class="btn btn-secondary">
                                            &nbsp;&nbsp;Descargar .csv
                                        </button>

                                        <button id="copiar" name="copiar" class="btn btn-secondary">
                                            &nbsp;&nbsp;Copiar
                                        </button>
                                    
                                        

                                        
                                   
                                        


                                </div>
                               <br> 
        </div>

        
      <table id="activos" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
          <tr>

            <th class="px-2 py-2">
                <center>
                    <span class="text-gray-300">Correo</span>
                </center>
            </th>
            <th class="px-2 py-2">
                <center>
                    <span class="text-gray-300">Tipo</span>
                </center>
            </th>
            <th class="px-2 py-2">
                <center>
                    <span class="text-gray-300">Nombres</span>
                </center>
            </th>
            <th class="px-2 py-2">
                <center>
                    <span class="text-gray-300">Seleccionar</span>
                </center>
            </th>

          </tr>
        </thead>

        <tbody class="bg-gray-200">
            @foreach($correos as $correo)
                  <tr>
                      <td class="px-2 py-2"><center>{{$correo->correo}}</center></td>
                      <td class="px-2 py-2"><center>{{$correo->tipo_usuario->descripcion}}</center><input type="hidden" id="id_tipo" name="id_tipo" value="{{$correo->tipo}}"></td>
                      <td class="px-2 py-2"><center>{{$correo->nombre}}</center></td>
                      <td>
                        <center>
                            @if($correo->tipo == 1)
                            <input id="check_administrativo" class="check_administrativo" name="check_administrativo[]" type="checkbox" value="{{$correo->correo}}">
                            
                            @else
                            <input id="check_docentes"  class="check_docentes" name="check_docentes[]" type="checkbox" value="{{$correo->correo}}">
                            @endif
                        </center>
                      </td>

                  </tr>
            @endforeach
        </tbody>
      
      </table>

    </form>

  </div>
</div>

      <br>
      <br>
  <!-- **********************************   fin tabla ***************************************-->
            </div>
        </div>
    </div>
</x-app-layout>

 <!-- **********************************   Script de la tabla ***************************************-->                              

<script defer src="{{asset('js/jquery/jquery.dataTables.min.js')}}" ></script>
<script defer src="{{asset('js/jquery/dataTables.bootstrap4.min.js')}}" ></script>
<script defer src="{{asset('js/jquery/dataTables.fixedHeader.min.js')}}" ></script>
<script defer src="{{asset('js/jquery/dataTables.responsive.min.js')}}" ></script>
<script defer src="{{asset('js/jquery/responsive.bootstrap.min.js')}}" ></script>
<script type="text/javascript">
    $(document).ready(function() {
       var tabla = $('#activos').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            //lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'Todos']],
            lengthMenu: [[-1, 50, 25, 10], ['Todos', 50, 25, 10]],
        });

//Boton de solo administrativos


 $('#administrativos').click(function(e){
            e.preventDefault();
 var isChecked = $(this).find('input[type="checkbox"]').is(":checked");

              tabla.rows().every(function() {
            var rowNode = this.node();
            var checkbox = $(rowNode).find('.check_administrativo');
            checkbox.prop('checked', !isChecked);

            $('form input[type="checkbox"]#check_docentes').prop('checked',false);
        });

        });


//Boton de solo docentes


  $('#docentes').click(function(e){
            e.preventDefault();
 var isChecked = $(this).find('input[type="checkbox"]').is(":checked");

              tabla.rows().every(function() {
            var rowNode = this.node();
            var checkbox = $(rowNode).find('.check_docentes');
            checkbox.prop('checked', !isChecked);

            $('form input[type="checkbox"]#check_administrativo').prop('checked',false);
        });

            
            

            /*
            //$('input[type="checkbox"]').attr('checked',$('#check_administrativo').is(":checked"));

            $('form input[type="checkbox"]#check_administrativo').prop('checked',true);
            */
        });


  //Boton Todos


  $('#todos').click(function(e){
            e.preventDefault();
 var isChecked = $(this).find('input[type="checkbox"]').is(":checked");

              tabla.rows().every(function() {
            var rowNode = this.node();
            var checkbox = $(rowNode).find('.check_docentes,.check_administrativo');
            checkbox.prop('checked', !isChecked);
        });

            /*
            $('input[type="checkbox"]#check_docentes').prop('checked',false);
            //$('input[type="checkbox"]').attr('checked',$('#check_administrativo').is(":checked"));

            $('form input[type="checkbox"]#check_administrativo').prop('checked',true);
            */
        });

  //Boton de Limpiar


  $('#limpiar').click(function(e){
            e.preventDefault();
 var isChecked = $(this).find('input[type="checkbox"]').is(":checked");

              tabla.rows().every(function() {
            var rowNode = this.node();
            var checkbox = $(rowNode).find('.check_docentes,.check_administrativo');
            checkbox.prop('checked', !isChecked);
            

            
            $('input[type="checkbox"]#check_administrativo').prop('checked',false);
            $('input[type="checkbox"]#check_docentes').prop('checked',false);

            /*
            //$('input[type="checkbox"]').attr('checked',$('#check_administrativo').is(":checked"));

            $('form input[type="checkbox"]#check_administrativo').prop('checked',true);
            */
        });
    });




//Controlador de eventos para el botón de enviar

$('#envio').click(function(e) {
    e.preventDefault();

    var selectedRows = [];

    // Obtén todas las filas de la tabla, incluyendo las no visibles
    var allRows = tabla.rows().nodes();

    // Verificar si al menos un checkbox está marcado
    var algunCheckboxMarcado = false;

    // Iterar sobre todas las filas
    $(allRows).each(function() {
        var checkbox = $(this).find('input[type="checkbox"]');

        // Verificar si el checkbox está marcado
        if (checkbox.is(':checked')) {
            selectedRows.push(checkbox.val());
            algunCheckboxMarcado = true;
        }
    });

    // Mostrar el mensaje si no hay ningún checkbox marcado
    if (algunCheckboxMarcado == false) {
        alert("Marque al menos una casilla");
        return; // Detener la ejecución del código si no hay checkboxes marcados
    }

    // Obtiene el valor del token CSRF
    var token = $('meta[name="csrf-token"]').attr('content');

    // Envía los checkboxes seleccionados al servidor utilizando AJAX
    $.ajax({
        url: "{{ route('redactarCorreos') }}",
        type: "POST",
        data: { selectedRows: selectedRows, _token: token },
        success: function(response) {
            // Procesa la respuesta del servidor
            console.log(response);
            window.location.href = "{{ route('mostrar') }}";
        },
        error: function(error) {
            // Maneja errores en la petición AJAX
            console.error(error);
        }
    });
});






// Controlador de eventos para el botón descargar .csv
$('#descargar').click(function(e) {
    e.preventDefault();

    var selectedRows = [];

    // Obtén todas las filas de la tabla, incluyendo las no visibles
    var allRows = tabla.rows().nodes();

    // Verificar si al menos un checkbox está marcado
    var algunCheckboxMarcado = false;

    // Iterar sobre todas las filas
    $(allRows).each(function() {
        var checkbox = $(this).find('input[type="checkbox"]');

        // Verificar si el checkbox está marcado
        if (checkbox.is(':checked')) {
            selectedRows.push(checkbox.val());
            algunCheckboxMarcado = true;
        }
    });

    // Mostrar el mensaje si no hay ningún checkbox marcado
    if (algunCheckboxMarcado == false) {
        alert("Marque al menos una casilla");
        return; // Detener la ejecución del código si no hay checkboxes marcados
    }

    // Obtiene el valor del token CSRF
    var token = $('meta[name="csrf-token"]').attr('content');

    // Envía los checkboxes seleccionados al servidor utilizando AJAX
    $.ajax({
        url: "{{ route('descargarCorreos') }}",
        type: "POST",
        data: { selectedRows: selectedRows, _token: token },
        success: function(response) {
            // Procesa la respuesta del servidor
            console.log(response);

            // Crear el contenido del archivo CSV
            var csvContent = "data:text/csv;charset=utf-8,";

            // Agregar encabezado del CSV
            csvContent += "Correos\n";

            // Agregar los valores de los checkboxes marcados al CSV
            selectedRows.forEach(function(value) {
                csvContent += value + "\n";
            });

            // Crear un enlace para descargar el archivo CSV
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "Correos.csv");
            document.body.appendChild(link);

            // Simular el clic en el enlace para iniciar la descarga
            link.click();
        },
        error: function(error) {
            // Maneja errores en la petición AJAX
            console.error(error);
        }
    });
});




// Controlador de eventos para el botón copiar


$('#copiar').click(function(e) {
    e.preventDefault();

    var selectedRows = [];

    // Obtén todas las filas de la tabla, incluyendo las no visibles
    var allRows = tabla.rows().nodes();

    // Verificar si al menos un checkbox está marcado
    var algunCheckboxMarcado = false;

    // Iterar sobre todas las filas
    $(allRows).each(function() {
        var checkbox = $(this).find('input[type="checkbox"]');

        // Verificar si el checkbox está marcado
        if (checkbox.is(':checked')) {
            selectedRows.push(checkbox.val());
            algunCheckboxMarcado = true;
        }
    });

    // Mostrar el mensaje si no hay ningún checkbox marcado
    if (algunCheckboxMarcado == false) {
        alert("Marque al menos una casilla");
        return; // Detener la ejecución del código si no hay checkboxes marcados
    }

    // Convertir los datos seleccionados en una cadena de texto
    var dataToCopy = selectedRows.join('\n');

    // Copiar los datos al portapapeles
    var dummyElement = $('<textarea>').val(dataToCopy).appendTo('body').select();
    document.execCommand('copy');
    dummyElement.remove();
    alert("Datos copiados al portapapeles");


   
});

});



  


</script>



<!-- **********************************   Fin ***************************************-->   