<?php

namespace App\funciones;

use App\LoginModel;

class login {

    public function verificarlogin($usuario, $pass) {
        return LoginModel::where ('usuario',$usuario)->where('pass',$pass)->get();
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

