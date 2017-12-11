<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
 protected  $table="login";
 protected  $primaryKey="id";
 protected $fillable=['id','usuario','pass'];

 public function Administrativo()
    {
        return $this->belongsTo('App\AdministrativoModel','ciAdm');
    }
public function verificarlogin($usuario, $pass) {
        return $this->where ('usuario',$usuario)->where('pass',$pass)->get();
    }
}

