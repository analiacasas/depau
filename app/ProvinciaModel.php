<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProvinciaModel extends Model
{
   protected  $table="provincia";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','nombre'];

 public function colegios()
    {
        return $this->hasMany('App\ColegioModel','idprovincia');
    }   
}
