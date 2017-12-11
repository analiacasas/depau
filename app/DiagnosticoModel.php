<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoModel extends Model
{ 
	protected  $table="diagnostico";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','idtest','carrera1','carrera2','idDiagnosticoPersonalidad','idDiagnosticoInteres','idDiagnosticoAptitud'];
 public function carreras1()
    {
        return $this->belongsTo('App\CarreraModel','carrera1');
    }
    public function carreras2()
    {
        return $this->belongsTo('App\CarreraModel','carrera2');
    }
     public function diagnosticoAptitud()
    {
        return $this->belongsTo('App\DiagnosticoaptitudModel','idDiagnosticoAptitud');
    }
    public function diagnosticoInteres()
    {
        return $this->belongsTo('App\DiagnosticointeresModel','idDiagnosticoInteres');
    }
     public function diagnosticoPersonalidad()
    {
        return $this->belongsTo('App\DiagnosticopersonalidadModel','idDiagnosticoPersonalidad');
    }
    public function test()
    {
        return $this->belongsTo('App\TestModel','idtest');
    }

}
