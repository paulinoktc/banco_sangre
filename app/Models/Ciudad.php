<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table='ciudades';
    protected $fillable = [
        'nombre',
        'estado_id'
    ];
    public $timestamps=false;
    
    //Relacion muchos a uno ciudad-estado
    public function estado(){
        return $this->belongsTo('App\Models\Estado','estado_id');
    }

    //Relacion uno a muchos ciudad-hospitales
    public function hospitales(){
        return $this->hasMany('App\Models\Hospital');
    }

    //Relacion uno a muchos ciudad-donadores
    public function donadores(){
        return $this->hasMany('App\Models\Donador');
    }
}
