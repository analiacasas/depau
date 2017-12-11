<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaModel extends Model
{
    protected  $table="reserva";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['id','idcolegio','nombre','codigo','fechainicio','fechafinal','hora','telefonocontacto','ciAdm'];

 public function colegio()
    {
        return $this->belongsTo('App\ColegioModel','idcolegio');
    } 

 public function administrativo()
    {
        return $this->belongsTo('App\AdministrativoModel','ciAdm');
    }  

    public function detalles()
    {
        return $this->hasMany('App\detallereservaModel','idreserva');
    
}   

}
