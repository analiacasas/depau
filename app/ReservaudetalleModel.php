<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaudetalleModel extends Model
{
     protected  $table="reservaudetalle";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','registro','formaIngreso','fechaIngreso','ppa','idreserva'];

 public function ingreso()
    {
        return $this->belongsTo('App\FormaingresoModel','formaIngreso');
    } 

 public function reservaunitaria()
    {
        return $this->belongsTo('App\ReservaUnitariaModel','idreserva');
    }    
}
