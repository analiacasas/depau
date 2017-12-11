<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioModel extends Model
{
    protected  $table="colegio";
 protected  $primaryKey="id";
 protected $keyType="integer";
public $incrementing=false;
 protected $fillable=['nombre','sie','idprovincia','estado','tipoU'];

public function postulantescolegio()
    {
        return $this->hasMany('App\PostulantecolegioModel','idcolegio');
    }   
public function provincia()
    {
        return $this->belongsTo('App\ProvinciaModel','idprovincia');
    } 

public function reservas()
    {
        return $this->hasMany('App\ReservaModel','idcolegio');
    }   
public function reservasunitarias()
    {
        return $this->hasMany('App\ReservacolegioModel','idColegio');
    }    
    /*
     * 
     */

public function insertar($input)
{

        $this->fill($input)->save();

}    
public function listar(){
   return $this->with('provincia')->orderBy('nombre')->get();
}

}
