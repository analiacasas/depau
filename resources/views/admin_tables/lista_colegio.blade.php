@if (count($colegios) > 0)
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
            <td><a href="javascript:void(0);" class="center-block" onclick="modificar({{$colegio->id}})"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
            <td><a href="javascript:void(0);" class="center-block" onclick="eliminar({{$colegio->id}})"> <i class="fa fa-close" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@if ($paginar == 'si' )
<div class="col-sm-12">
    <nav>
        <ul class="pagination">
            {!!$colegios->render()!!}
        </ul>
    </nav>                
</div>
@endif
@else
  <h4>No hay resultados para la búsqueda</h4>
@endif
