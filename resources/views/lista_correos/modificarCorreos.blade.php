<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Correos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    
    <div class="col-md-12">
                    <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <center>
                                <h3><b>Modificar Correo</b></h3>
                            </center>
                        </div>

                                    <br>

                    <form action="{{route('modificarCorreo',$modificar->id)}}" method ="POST" enctype="multipart/form-data">
                        <div class="card-body">
                                <div class="row">
                                    @csrf

                                    <br>

                                    <div class="col-md-4">
                                        <label>Nuevo Correo:</label>
                                        <br>
                                        <input type="email" name="correo" value="{{$modificar->correo}}" maxlength="50" required autofocus>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="tipo">Tipo de Usuario: </label>
                                        <br>
                                        <select class="form-control" id="usuario" name="usuario" required >
                                            <option value="{{$modificar->tipo}}">{{$modificar->tipo_usuario->descripcion}}</option>
                                            @foreach($tipo_usuario as $usuario)
                                                <option  value="{{$usuario->id}}">{{$usuario->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="tipo">Status: </label>
                                        <br>
                                        <select class="form-control" id="status" name="status" required >
                                            <option value="{{$modificar->status}}">{{$modificar->tipo_status->descripcion}}</option>
                                            @foreach($tipo_status as $status)
                                                <option  value="{{$status->id}}">{{$status->descripcion}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                        
                                    <div class="col-md-4">

                                        <label for="nombres">Nuevo Nombre:</label>
                                        <br>
                                        <input id="nombres" type="text" class="form-control" name="nombres" value="{{$modificar->nombre}}" maxlength="50" required autofocus>
                                    </div>
                           

                            </div>

                            </div>

                            <div class="card-footer">
                                <div class="col-md-12">
                                    <center>
                                        <button id="guardar" class="btn btn-primary">
                                            &nbsp;&nbsp;Guardar Cambios
                                        </button>
                                    </center>
                                </div>
                            </div>  
                    
                    </form>
                    </div>
                 
            </div>
        </div>
    </div>
</div>
    </div>

</x-app-layout>