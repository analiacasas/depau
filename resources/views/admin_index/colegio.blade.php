
@extends('admin.main')

@section('titulo1','Colegio')
@section('titulo2','Administrador')
@section('titulo3','Colegio')

@section('contenido')
<script src="{{asset('js/colegio.js')}}" type="text/javascript"></script>

<div class="bgcolor3 pt-sinpadding pb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
<!--                <h3 class="heading text-center"> Lista<span class="color2"> Colegios</span></h3>-->
                <div id="editar" style="display: none">
                </div>
                <div class="row">
                    <div class="col-sm-10 " >
                        <aside class="widget search-widget search">
                            <form class="search form-inline">   <!-- Search Form -->
                                <div class="input-group ">
                                    <input type="text" class="form-control"  id="buscar" name="buscar" placeholder="SIE Ó NOMBRE ">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">  
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
                                    <button class=" btn btn-default " type="button" onclick="insertar();">AÑADIR</button>
                                </span>
                            </div> 
                        </aside>
                    </div>
                </div> 
                <div id="listado"> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection