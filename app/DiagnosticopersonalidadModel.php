<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticopersonalidadModel extends Model
{
    protected  $table="diagnosticopersonalidad";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','parametros','detalle'];

  public function diagnosticosPersonalidad()
    {
        return $this->hasMany('App\DiagnosticoModel','idDiagnosticoPersonalidad');
    } 
}
