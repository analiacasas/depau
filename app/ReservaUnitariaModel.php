<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaUnitariaModel extends Model
{
     protected  $table="reservaunitaria";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','ciPostulante','codigo','fechaInicio','fechaFinal','hora','telefono','estado','ciAdm','idtipotra'];

 public function administrativo()
    {
        return $this->belongsTo('App\AdministrativoModel','ciAdm');
    } 
    public function detallecolegio()
    {
        return $this->hasMany('App\ReservacolegioModel','idreserva');
    }
       public function detalleu()
    {
        return $this->hasMany('App\ReservaudetalleModel','idreserva');
    }   
     public function tipotramite()
    {
        return $this->belongsTo('App\TipotramiteModel','idtipotra');
    }
}
