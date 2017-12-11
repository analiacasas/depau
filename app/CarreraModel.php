<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraModel extends Model
{
 protected  $table="carrera2";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','personalidadPrincipal','personalidadReforzatoria','interesPrincipal','interesSecundario','interesReforzatorio','aptitudPrincipal','aptitudSecundaria','aptitudReforzatoria','nombre','idFacultad','idArea','estado'];

 public function aptitudP()
    {
        return $this->belongsTo('App\AptitudModel','aptitudPrincipal');
    }

  public function aptitudS()
    {
        return $this->belongsTo('App\AptitudModel','aptitudSecundaria');
    }

    

  public function aptitudR()
    {
        return $this->belongsTo('App\AptitudModel','aptitudReforzatoria');
    } 

    public function carrerasopcion()
    {
        return $this->hasMany('App\CarreraopcionModel','idcarrera');
    }     
     public function diagnosticos1()
    {
        return $this->hasMany('App\DiagnosticoModel','carrera1');
    }   
      public function diagnosticos2()
    {
        return $this->hasMany('App\DiagnosticoModel','carrera2');
    } 

  public function facultad()
    {
        return $this->belongsTo('App\FacultadModel','idFacultad');
    }


 public function interesP()
    {
        return $this->belongsTo('App\InteresModel','interesPrincipal');
    }

  public function interesS()
    {
        return $this->belongsTo('App\InteresModel','interesSecundaria');
    }

    

  public function interesR()
    {
        return $this->belongsTo('App\InteresModel','interesReforzatorio');
    } 
 public function personalidadP()
    {
        return $this->belongsTo('App\PersonalidadModel','personalidadPrincipal');
    }

    

  public function personalidadR()
    {
        return $this->belongsTo('App\PersonalidadModel','personalidadReforzatoria');
    } 

}
