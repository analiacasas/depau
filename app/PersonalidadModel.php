<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalidadModel extends Model
{
     protected  $table="personalidad";
 protected  $primaryKey="sigla";
 protected $keyType="string";
 public $incrementing=false;
 protected $fillable=['sigla','nombre'];
    public function CarrerasPersonalidadP()
    {
        return $this->hasMany('App\CarreraModel','personalidadPrincipal');
    }


    
    public function CarrerasPersonalidadR()
    {
        return $this->hasMany('App\CarreraModel','personalidadReforzatoria');
    }  

      public function porques()
    {
        return $this->hasMany('App\PorqueModel','personalidadPerteneciente');
    } 
}
