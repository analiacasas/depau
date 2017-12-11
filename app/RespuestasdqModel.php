<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestasdqModel extends Model
{
    protected  $table="respuestasdq";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','preguntaPerteneciente','contenido','estado'];

 public function pregunta()
    {
        return $this->belongsTo('App\PreguntasdqModel','preguntaPerteneciente');
    }

}
