<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioModel extends Model {

    protected $table = "colegio";
    protected $primaryKey = "id";
    protected $keyType = "integer";
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['nombre', 'sie', 'idprovincia', 'estado', 'tipoU'];

    public function postulantescolegio() {
        return $this->hasMany('App\PostulantecolegioModel', 'idcolegio');
    }

    public function provincia() {
        return $this->belongsTo('App\ProvinciaModel', 'idprovincia');
    }

    public function reservas() {
        return $this->hasMany('App\ReservaModel', 'idcolegio');
    }

    public function reservasunitarias() {
        return $this->hasMany('App\ReservacolegioModel', 'idColegio');
    }

    /*
     * 
     */

    public function insertar($nombre, $sie, $provincia, $tipo) {
        $this->insert(['nombre' => $nombre, 'sie' => $sie, 'idprovincia' => $provincia, 'estado' => '1', 'tipoU' => $tipo]);
    }

    public function listar() {
        return $this->with('provincia')->orderBy('nombre')->get();
    }

    public function buscar($input) {


     return   $this->with('provincia')->where('sie', 'like', "%$input%")->orWhere('nombre', 'like', "%$input%")->get();
    }

    public function modificar($id, $nombre, $sie, $idP, $estado, $tipoU) {




        $this->where('id', $id)->update(['nombre' => $nombre, 'sie' => $sie, 'idprovincia' => $id, 'estado' => $estado, 'tipoU' => $tipoU]);
    }

    public function eliminar($id) {


        $this->where('id', $id)->update(['estado' => '0']);
    }

}
