<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table='estados';
    protected $fillable = [
        'nombre'
    ];
    public $timestamps=false;

    //Relacion uno a muchos estado-ciudad
    public function ciudades(){
        return $this->hasMany('App\Models\Ciudad');
    }
   
}
