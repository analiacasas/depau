<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntasdqModel extends Model
{
    protected  $table="preguntasdq";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','abreviaturaAptitud','contenido','url','dificultad'];

 public function aptitud()
    {
        return $this->belongsTo('App\AptitudModel','abreviaturaAptitud');
    }

 public function respuestas()
    {
        return $this->hasMany('App\RespuestasdqModel','preguntaPerteneciente');
    }  
  public function detallesdq()
    {
        return $this->hasMany('App\DetalleexamendqModel','preguntaPerteneciente');
    }       

}
