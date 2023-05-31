<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provisional_correo extends Model
{
    use HasFactory;

    protected $table = 'provicional_correos';

    /*
    public function nombreFuncion(){
        return $this->belongsTo(tablaReferencia::class,'llaveForanea','llavetablaReferencia');
    }
    

    public function tipo_usuario(){
        return $this->belongsTo(Tipo::class,'responsable_id');
    }
    

     public function solicitante(){
        return $this->belongsTo(User::class,'solicitante_id');
    }
    
     public function nombre_plantel(){
        return $this->belongsTo(Plantele::class,'id_plantel','id');
    }*/
}