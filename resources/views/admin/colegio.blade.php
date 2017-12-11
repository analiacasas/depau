
@extends('admin.main')

@section('titulo1','Unidades Educativas')
@section('titulo2','Administrador')
@section('titulo3','Unidades Educativas')

@section('contenido')

<div class="bgcolor3 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="heading text-center"> Lista<span class="color2"> Unidades Educativas</span></h3>
                <div class="row">
                    <div class="col-sm-10 " >
                        <aside class="widget search-widget search">
                            <form class="search form-inline">   <!-- Search Form -->
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="SIE Ó NOMBRE ">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search fa-fw"></i></button>
                                    </span>
                                </div>                                                
                            </form>  
                        </aside>
                    </div> 
                    <div class="col-sm-2" style="background:#f7f7f7 "  >
                        <aside class="widget search-widget" style="background:#f7f7f7 ; border: none ; box-shadow: none" >
                            <div class="input-group form-inline " style="background:#f7f7f7" >
                                <span class="input-group-btn  " >
                                    <button class=" btn btn-default " type="button">AÑADIR</button>
                                </span>
                            </div> 
                        </aside>
                    </div>
                </div> 

                <table class="table table-boxed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>SIE</th>
                            <th>PROVINCIA</th>
                            <th>TIPO COLEGIO</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($colegios as $colegio)
                        <tr>
                            <th scope="row">{{$colegio->id}}</th>
                            <td>{{$colegio->nombre}}</td>
                            <td>{{$colegio->sie}}</td>
                            <td>{{$colegio->provincia->nombre}}</td>
                            <td>{{$colegio->tipoU}}</td>
                            <td><a href="javascript:void(0);" class="center-block" onclick="modificar(5)"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a href="javascript:void(0);" class="center-block" onclick="modificar(5)"> <i class="fa fa-close" aria-hidden="true"></i></a></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="col-sm-12">
                <nav>
                    <ul class="pagination">
                        {!!$colegios->render()!!}
                    </ul>
                </nav>                
            </div>
        </div>
    </div>
</div>
@endsection