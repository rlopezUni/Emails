<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Lista Correos

    Route::get('/lista_correos/','App\Http\Controllers\ListaController@index')->name('mostrarCorreos');
    Route::post('/lista_correos/eliminar/{id}','App\Http\Controllers\ListaController@eliminar')->name('eliminarCorreo');
    Route::get('/lista_correos/modificar/{id}','App\Http\Controllers\ListaController@mostrarModificar')->name('mostrarModificarCorreo');
    Route::post('/lista_correos/modificar/{id}','App\Http\Controllers\ListaController@modificar')->name('modificarCorreo');

    //Enviar

    Route::get('/enviar/','App\Http\Controllers\EnvioController@index')->name('mostrarEnvios');
    Route::post('/enviar_post/','App\Http\Controllers\EnvioController@redactar')->name('redactarCorreos');
    Route::post('/mensaje_enviar/','App\Http\Controllers\EnvioController@enviar')->name('enviarCorreos');
    Route::get('/mostrar_vista/','App\Http\Controllers\EnvioController@enviarVista')->name('mostrar');
    Route::post('/descargar_csv/','App\Http\Controllers\EnvioController@descargarCSV')->name('descargarCorreos');
    //Route::post('/lista_correos/modificar/{id}','App\Http\Controllers\ListaController@modificar')->name('modificarCorreo');

});
