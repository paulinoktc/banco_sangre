<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sangre extends Model
{
    use HasFactory;
    protected $table='sangre';
    protected $fillable = [
        'tipo'
    ];
    public $timestamps=false;

    //Relacion uno a muchos sangre-paciente
    public function pacientes(){
        return $this->hasMany('App\Models\Paciente');
    }

    //Relacion uno a muchos sangre-donador
    public function donadores(){
        return $this->hasMany('App\Models\Donador');
    }
}
