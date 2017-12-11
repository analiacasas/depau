<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleexamendqModel extends Model
{
    protected  $table="detalleexamendq";
 protected  $primaryKey="preguntaPerteneciente";
  protected  $primaryKey2="examenPerteneciente";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['preguntaPerteneciente','examenPerteneciente','respuesta','nro'];

  public function test()
    {
        return $this->belongsTo('App\TestModel','examenPerteneciente');
    }
    public function pregunta()
    {
        return $this->belongsTo('App\PreguntasdqModel','preguntaPerteneciente');
    }  
}
