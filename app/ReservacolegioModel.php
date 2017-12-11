<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservacolegioModel extends Model
{
     protected  $table="reservacolegio";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','pais','departamento','idColegio','idReserva'];

 public function colegio()
    {
        return $this->belongsTo('App\ColegioModel','idColegio');
    } 


 public function reservaunitaria()
    {
        return $this->belongsTo('App\ReservaUnitariaModel','idReserva');
    }    

}
