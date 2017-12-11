<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected  $table="test";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','fecha','horaInicio','horaFinal','ciPostulante','idtipotra'];

 public function postulante()
    {
        return $this->belongsTo('App\PostulanteModel','ciPostulante');
    }
 public function diagnostico()
    {
        return $this->hasMany('App\DiagnosticoModel','idtest');
    }  
 public function tipotramite()
    {
        return $this->belongsTo('App\TipotramiteModel','idtipotra');
    }
 public function detallesdq()
    {
        return $this->hasMany('App\DetalleexamendqModel','examenPerteneciente');
    } 
  public function detallestq()
    {
        return $this->hasMany('App\DetalleexamentqModel','examenPerteneciente');
    } 


}
