<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donador extends Model
{
    use HasFactory;

    protected $table='donadores';
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'sangre_id',
        'foto',
        'telefono',
        'latitud',
        'longitud',
        'ciudad_id',
        'user_id',
        'formulario_id'
    ];
    //Relacion uno a muchos donador-donacion
    public function donaciones(){
        return $this->hasMany('App\Models\Donacion');
    }

    //Relacion muchos a uno donador-ciudad
    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad','ciudad_id');
    }

    //Relacion muchos a uno donador-sangre
    public function sangre(){
        return $this->belongsTo('App\Models\Sangre','sangre_id');
    }

    //Relacion uno a uno donador-user
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    //Relacion uno a uno donador-formulario
    public function formulario(){
        return $this->belongsTo('App\Models\Fomulario','formulario_id');
    }
}
