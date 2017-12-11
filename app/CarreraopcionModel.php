<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraopcionModel extends Model
{
     protected  $table="carreraopcion";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','idcarrera','tipo','detalleotros','idtest'];

  public function carrera()
    {
        return $this->belongsTo('App\CarreraModel','idcarrera');
    }

}
