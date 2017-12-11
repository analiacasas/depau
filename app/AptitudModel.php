<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AptitudModel extends Model
{
   protected  $table="aptitud";
 protected  $primaryKey="Sigla";
 protected $keyType="string";
public $incrementing=false;
 protected $fillable=['Sigla','nombre'];



 public function CarrerasAptitudP()
    {
        return $this->hasMany('App\CarreraModel','aptitudPrincipal');
    }

  public function CarrerasAptitudS()
    {
        return $this->hasMany('App\CarreraModel','aptitudSecundaria');
    }
    
    public function CarrerasAptitudF()
    {
        return $this->hasMany('App\CarreraModel','aptitudReforzatoria');
    }  
     public function preguntasdq()
    {
        return $this->hasMany('App\PreguntasdqModel','abreviaturaAptitud');
    }  

}
