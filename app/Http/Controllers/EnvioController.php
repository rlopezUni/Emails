<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Correo;
use App\Models\Provisional_correo;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$correos = new Correo();
        //$correos = $correos->all();

        $correos = Correo::where("status",1)->get();

        return view('envios.envios',compact("correos"));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function redactar(Request $request)
    {

        DB::table('provicional_correos')->delete();

        $correos = $request->selectedRows;


            foreach($correos as $correos){
                
                $guardaCorreo = new Provisional_correo;
                $guardaCorreo->correo = $correos;
                $guardaCorreo->save();
        
        }

       
    }


    public function enviarVista(Request $request)
    {



        return view('envios.redactar');
       
    }

    public function enviar(Request $request)
    {
        $correos = DB::table('provicional_correos')->get();

        //$correos = ['000010383@alumnos.univer-gdl.edu.mx','rodrigo.lopez@univer-gdl.edu.mx'];

        $correosEnviar = [];

        foreach($correos as $correos){
            array_push($correosEnviar,$correos->correo);
        }

       // dd($correosEnviar);

        $message = [
        'name' => 'Comunicados Univer',
        'email' => $correosEnviar,
        'asunto' => $request->asunto,
        'cuerpo' => $request->cuerpo,
    ];

    $correo = new MensajeRecibido($message);

    // Verifica si se enviaron archivos adjuntos
    if ($request->hasFile('archivo')) {
        $archivosAdjuntos = $request->file('archivo');

        // Itera sobre los archivos adjuntos y los agrega al correo
        foreach ($archivosAdjuntos as $archivo) {
            $correo->attach($archivo->getRealPath(), [
                'as' => $archivo->getClientOriginalName(),
                'mime' => $archivo->getMimeType()
            ]);
        }
    }

    Mail::bcc($message['email'])->send($correo);


        return redirect('/enviar')->with('enviado','Correo enviado correctamente');
     
    }


    public function descargarCSV(Request $request)
    {
        
        

       // return redirect('/enviar')->with('enviado','Correo enviado correctamente');
     
    }


    

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
