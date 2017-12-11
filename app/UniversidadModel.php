<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversidadModel extends Model
{
    protected  $table="universidad";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','nombre','gradoAcademico'];

   public function facultades()
    {
        return $this->hasMany('App\FacultadModel','idU');
    }   


}
