<?php

namespace App\Http\Controllers;

use App\ColegioModel;
use App\ProvinciaModel;
use Illuminate\Http\Request;

class ColegioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//     $colegio=new ColegioModel();
//     $datos= $colegio->listar();
//     return view('admin.colegio')->with('colegios',$datos)->paginate(5);
        $sa = ColegioModel::orderBy('nombre', 'ASC')->paginate(10);
        return view('admin_index.colegio')->with('colegios', $sa);
    }

    public function listar() {
        $sa = ColegioModel::orderBy('nombre', 'ASC')->paginate(10);
        return view('admin_tables.lista_colegio')->with('colegios', $sa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrarinsertar(Request $request) {
        $provincias = ProvinciaModel::all();
        return view('admin_forms.add_colegio')->with('provincias', $provincias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $colegio = new colegioModel;
        $nombre = $request->get('nombre');
        $sie = $request->get('sie');
        $provincia = $request->get('provincia');
        $tipo = $request->get('colegio');
        $insertar = $colegio->insertar($nombre, $sie, $provincia, $tipo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ColegioModel  $colegioModel
     * @return \Illuminate\Http\Response
     */
    public function show(ColegioModel $colegioModel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ColegioModel  $colegioModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ColegioModel $colegioModel) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ColegioModel  $colegioModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ColegioModel $colegioModel) {
        //
    }

    public function buscar(request $request)
    {
        $colegio=new colegioModel;
        $buscar=colegio->buscar($request);
    }
        public function modificar(request $request)
    {
     
        $colegio = new colegioModel;
        $nombre = $request->get('nombre');
        $sie = $request->get('sie');
        $provincia = $request->get('provincia');
        $estado = $request->get('estado');
        $tipo = $request->get('colegio');
        $modificar = $colegio->modificar($nombre, $sie, $provincia,$estado, $tipo);
    }
        public function eliminar(request $request)
    {
        $colegio=new colegioModel;
        $id = $request->get('id');
        $eliminar=colegio->eliminar($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ColegioModel  $colegioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ColegioModel $colegioModel) {
        //
    }

}
