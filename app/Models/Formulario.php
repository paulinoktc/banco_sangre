<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table='formulario';
    public $timestamps=false;

    //Relacion uno a uno formulario-donador
    public function donador(){
        return $this->hasOne('App\Models\Donador');
    }

    //Relacion uno a muchos formulario-preguntas
    public function preguntas(){
        return $this->hasMany('App\Models\Pregunta');
    }
}
