<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticoaptitudModel extends Model
{
   protected  $table="diagnosticoaptitud";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','parametros','detalle'];

  public function diagnosticosAptitud()
    {
        return $this->hasMany('App\DiagnosticoModel','idDiagnosticoAptitud');
    } 
}
