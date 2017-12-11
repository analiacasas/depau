<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulantecolegioModel extends Model
{
    protected  $table="postulantecolegio";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','ciPostulante','pais','departamento','idColegio'];

  public function colegio()
    {
        return $this->belongsTo('App\ColegioModel','idcolegio');
    } 
  public function postulante()
    {
        return $this->belongsTo('App\PostulanteModel','ciPostulante');
    } 

}
