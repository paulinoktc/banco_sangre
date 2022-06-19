<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    use HasFactory;

    protected $table='donacion';
    protected $fillable = [
        'paciente_id',
        'donador_id',
        'estatus',
        'unidades_donadas',
        'hospital_id'
    ];

    //Relacion muchos a uno donacion-hospital
    public function hospital(){
        return $this->belongsTo('App\Models\Hospital','hospital_id');
    }

    //Relacion muchos a uno donacion-paciente
    public function paciente(){
        return $this->belongsTo('App\Models\Paciente','paciente_id');
    }

    //Relacion muchos a uno donacion-donador
    public function donador(){
        return $this->belongsTo('App\Models\Donador','donador_id');
    }
}
