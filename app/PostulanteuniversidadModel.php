<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostulanteuniversidadModel extends Model
{
     protected  $table="postulanteuniversidad";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','registro','ciPostulante','formaIngreso','fechaIngreso','ppa'];

  public function ingresoforma()
    {
        return $this->belongsTo('App\FormaingresoModel','formaIngreso');
    } 
  public function postulante()
    {
        return $this->belongsTo('App\PostulanteModel','ciPostulante');
    } }
