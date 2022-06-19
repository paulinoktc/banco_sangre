<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $table='respuestas';
    protected $fillable = [
        'pregunta_id',
        'respuesta',
        'valor'
    ];
    public $timestamps=false;

    //Relacion muchos a uno respuesta-pregunta
    public function pregunta(){
        return $this->belongsTo('App\Models\Pregunta','pregunta_id');
    }
}
