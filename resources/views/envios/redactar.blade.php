<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Redactar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                <!-- ******************************   Inicia tabla   *****************************************-->
<div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">

                        <div class="card-header">
                            <center>
                                <h3><b>Redaccion de Correo</b></h3>
                            </center>
                        </div>

<form action="{{ route('enviarCorreos') }}" method ="POST" enctype="multipart/form-data">

    @csrf
    <div class="card-body">
                                <div class="row">
                                    

                                    <div class="col-md-4">
                                        <span for="asunto">Asunto: </span>
                                        <input id="asunto" type="text" placeholder="Asunto" class="form-control" name="asunto"  maxlength="100" required autofocus style="width : 1140px; heigth : 1px">
                                    </div>

                                    <br>
                                </div>

                                <br>

                                <div class="row">
                                    

                                    <div class="col-md-4">
                                        <span for="cuerpo">Cuerpo: </span>
                                        <input id="cuerpo" type="text" placeholder="Cuerpo del Correo" class="form-control" name="cuerpo"  maxlength="500" required autofocus style="width : 1140px; heigth : 1000px">
                                    </div>

                                    <br>
                                </div>

                                <br>

                                <div class="row">
                                    

                                    <div class="col-md-4">
                                        <span for="archivo">Adjuntar archivo: </span>
                                        <input id="archivo" type="file" class="form-control" name="archivo[]" size="10000000" multiple>
                                    </div>

                                    <br>
                                </div>

                                
    </div>
                                    


                            <div>
                                <div class="col-md-12">
                                    
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
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                                        <button id="guardar" class="btn btn-primary">
                                            &nbsp;&nbsp;Enviar
                                        </button>
                                    
                                </div>
                            </div>

      <br>

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