<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    use HasFactory;

    /*protected $table = 'tickets_hist';

    /*
    public function nombreFuncion(){
        return $this->belongsTo(tablaReferencia::class,'llaveForanea','llavetablaReferencia');
    }*/
    

    public function tipo_usuario(){
        return $this->belongsTo(Tipo::class,'tipo','id');
    }
    

     public function tipo_status(){
        return $this->belongsTo(Statu::class,'status','id');
    }
    /*
    
     public function nombre_plantel(){
        return $this->belongsTo(Plantele::class,'id_plantel','id');
    }*/
}