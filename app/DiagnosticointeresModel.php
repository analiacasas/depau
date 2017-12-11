<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticointeresModel extends Model
{
       protected  $table="diagnosticointeres";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','parametros','detalle'];

  public function diagnosticosInteres()
    {
        return $this->hasMany('App\DiagnosticoModel','idDiagnosticoInteres');
    } 
}
