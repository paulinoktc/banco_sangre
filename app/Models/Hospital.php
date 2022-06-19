<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table='hospitales';
    protected $fillable = [
        'rfc',
        'certificado',
        'nombre',
        'latitud',
        'longitud',
        'ciudad_id',
        'user_id',
    ];

    //Relacion muchos a uno hospital-ciudad
    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad','ciudad_id');
    }

    //Relacion uno a uno hospital-user
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    //Relacion uno a muchos hospital-pacientes
    public function pacientes(){
        return $this->hasMany('App\Models\Paciente');
    }

    //Relacion uno a muchos hospital-donaciones
    public function donaciones(){
        return $this->hasMany('App\Models\Donacion');
    }

    
}
