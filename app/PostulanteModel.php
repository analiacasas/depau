<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulanteModel extends Model
{
  protected  $table="postulante";
 protected  $primaryKey="ci";
  protected $keyType="string";
 public $incrementing=false;
 protected $fillable=['ci','procedencia','nombre','apellidos','edad','telefono','fechaNacimiento'];

 public function postulantescolegio()
    {
        return $this->hasMany('App\PostulantecolegioModel','ciPostulante');
    }     

   public function postulantesuniversidad()
    {
        return $this->hasMany('App\PostulanteuniversidadModel','ciPostulante');
    }   

     public function tests()
    {
        return $this->hasMany('App\TestModel','ciPostulante');
    }  

}
