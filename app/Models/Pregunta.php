<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table='preguntas';
    protected $fillable = [
        'pregunta',
        'formulario_id'
    ];
    public $timestamps=false;

    //Relacion muchos a uno pregunta-formulario
    public function formulario(){
        return $this->belongsTo('App\Models\Formulario','formulario_id');
    }

    //Relacion uno a muchos pregunta-respuestas
    public function respuestas(){
        return $this->hasMany('App\Models\Respuesta');
    }

}
