<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaingresoModel extends Model
{
     protected  $table="formaingreso";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','nombre','estado'];
 
   public function postulantesuniversidad()
    {
        return $this->hasMany('App\PostulanteuniversidadModel','formaIngreso');
    }     
 public function reservasudetalle()
    {
        return $this->hasMany('App\ReservaudetalleModel','formaIngreso');
    }   

}
