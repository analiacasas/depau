<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallereservaModel extends Model
{
     protected  $table="detallereserva";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','idreserva','ci','estado'];

  public function reserva()
    {
        return $this->belongsTo('App\ReservaModel','idreserva');
    }  
}
