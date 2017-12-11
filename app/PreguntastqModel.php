<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntastqModel extends Model
{
    protected  $table="preguntastq";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','idInteres','contenido'];

 public function interes()
    {
        return $this->belongsTo('App\InteresModel','idInteres');
    }

 public function detallestq()
    {
        return $this->hasMany('App\DetalleexamentqModel','preguntaPerteneciente');
    }       


}
