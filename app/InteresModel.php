<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InteresModel extends Model
{
	 protected  $table="interes";
 protected  $primaryKey="id";
 public $incrementing=false;
 protected $fillable=['id','nombre'];
    public function CarrerasInteresP()
    {
        return $this->hasMany('App\CarreraModel','interesPrincipal');
    }

  public function CarrerasInteresS()
    {
        return $this->hasMany('App\CarreraModel','interesSecundario');
    }
    
    public function CarrerasInteresR()
    {
        return $this->hasMany('App\CarreraModel','interesReforzatorio');
    }  

    public function preguntastq()
    {
        return $this->hasMany('App\PreguntastqModel','idInteres');
    }  
}
