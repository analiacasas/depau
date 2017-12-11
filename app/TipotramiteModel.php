<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipotramiteModel extends Model
{
    protected  $table="tipotramite";
 protected  $primaryKey="id";
  protected $keyType="integer";
 public $incrementing=false;
 protected $fillable=['id','nombre','descripcion','estado'];

 public function tests()
    {
        return $this->hasMany('App\TestModel','idtipotra');
    }  

 public function reservasunitarias()
    {
        return $this->hasMany('App\ReservaUnitariaModel','idtipotra');
    }  
}
