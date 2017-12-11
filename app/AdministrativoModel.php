<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdministrativoModel extends Model
{
     protected  $table="administrativo";
      protected  $primaryKey="ci";
     protected $fillable=['ci','nombre','codAdm'];


      public function logins()
    {
        return $this->hasMany('App\LoginModel','ci');
    }

        public function reservas()
    {
        return $this->hasMany('App\ReservaModel','ciAdm');
    
}

    public function reservasunitarias()
    {
        return $this->hasMany('App\ReservaunitariaModel','ciAdm');
    }
}