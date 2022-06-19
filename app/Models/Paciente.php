<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table='pacientes';
    protected $fillable = [
        'hospital_id',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'sangre_id',
        'foto',
        'telefono',
        'nss',
        'latitud',
        'longitud',
        'unidades_requeridas',
        'motivo',
        'fecha_ingreso',
        'prioridad_id'
    ];

    //Relacion muchos a uno paciente-hospital
    public function hospital(){
        return $this->belongsTo('App\Models\Hospital','hospital_id');
    }

    //Relacion muchos a uno paciente-sangre
    public function sangre(){
        return $this->belongsTo('App\Models\Sangre','sangre_id');
    }

    //Relacion muchos a uno paciente-sangre
    public function prioridad(){
        return $this->belongsTo('App\Models\Prioridad','prioridad_id');
    }

    //Relacion uno a muchos paciente-donacion
    public function donaciones(){
        return $this->hasMany('App\Models\Donacion');
    }
}
