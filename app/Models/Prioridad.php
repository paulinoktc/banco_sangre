<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    use HasFactory;
    protected $table='prioridades';
    protected $fillable = [
        'nombre'
    ];
    public $timestamps=false;

    //Relacion uno a muchos prioridad-paciente
    public function pacientes(){
        return $this->hasMany('App\Models\Paciente');
    }
}
