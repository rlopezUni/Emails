<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correo;
use App\Models\Tipo;
use App\Models\Statu;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        $idUse = Auth::id();

        $rolUser = User::where('id',$idUse)->first();

        if($rolUser->rol == 1)
        {
        $obj = new Objeto();
        $obj = $obj->all();

        $varPlantel = DB::table('areas')
                    ->join('planteles', function ($join){
                    $join->on('areas.id_plantel','=','planteles.id');
                    })->select('areas.id_plantel','planteles.descripcion')->distinct()->get();

        return view('activos',compact("obj","varPlantel"));
        }

        else
        {
            abort(403,'No tienes permiso');
        }*/

        $correos = new Correo();
        $correos = $correos->all();

        return view('lista_correos.correos',compact("correos"));
    }

    public function eliminar($id)
    {
        Correo::where('id',$id)->delete();

        return redirect('/lista_correos')->with('elimiCorreos','Correo eliminado correctamente');
    }

    public function mostrarModificar($id)
    {
        $modificar = Correo::where('id',$id)->first();

        $tipo_usuario = new Tipo();
        $tipo_usuario = $tipo_usuario->all();

        $tipo_status = new Statu();
        $tipo_status = $tipo_status->all();

        return view('lista_correos.modificarCorreos',compact("modificar","tipo_usuario","tipo_status"));
    }

    public function modificar($id, Request $request)
    {

        $mod = Correo::where('id',$id)->first();

        $mod->correo = $request->correo;
        $mod->tipo = $request->usuario;
        $mod->status  = $request->status;
        $mod->nombre  = $request->nombres;
        
        $mod->save();

        return redirect("/lista_correos")->with('modiCorreos','Correo modificado correctamente');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
