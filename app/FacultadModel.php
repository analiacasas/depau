<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultadModel extends Model
{
   protected  $table="facultad";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','nombre','idU'];

  public function carreras()
    {
        return $this->hasMany('App\CarreraModel','idFacultad');
    }   

   public function universidad()
    {
        return $this->belongsTo('App\UniversidadModel','idU');
    }    
}
