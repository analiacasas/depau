<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PorqueModel extends Model
{
     protected  $table="porque";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','preguntaPerteneciente','personalidadPerteneciente','contenido'];

 public function personalidad()
    {
        return $this->belongsTo('App\PersonalidadModel','personalidadPerteneciente');
    }

}
