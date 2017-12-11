<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleexamentqModel extends Model
{
       protected  $table="detalleexamentq";
 protected  $primaryKey="preguntaPerteneciente";
  protected  $primaryKey2="examenPerteneciente";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['preguntaPerteneciente','examenPerteneciente','respuesta','porque'];

  public function test()
    {
        return $this->belongsTo('App\TestModel','examenPerteneciente');
    }
    public function pregunta()
    {
        return $this->belongsTo('App\PreguntastqModel','preguntaPerteneciente');
    }  
}
