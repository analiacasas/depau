<div class="col-sm-12 mt-20">
    <h4 class="heading">Modificar <span class="color2">Unidad Educativa</span></h4>
    @foreach($colegios as $colegio)

    <div class="form-group">
        <label for="contact-email">Nro.</label>
        <input   type="text" class="form-control" id="nro" name="nro" value="{{$colegio->id}}"  readonly>

    </div>
    <div class="form-group">
        <label for="contact-email">SIE</label>
        <input placeholder="SIE"  type="text" class="form-control" id="sie" name="sie" value="{{$colegio->sie}}" >

    </div>
    <div class="form-group">
        <label for="contact-name">Nombre de la Unidad Educativa</label>
        <input placeholder="NOMBRE"  type="text" class="form-control" id="nombre" value="{{$colegio->nombre}}"  name="nombre">

    </div>

    <div class="form-group">
        <label for="contact-number">Provincia</label>
        <select  class="form-control" id="provincia" name="provincia" style="width: 100%;">

            @foreach($provincias as $provincia)
            @if ($provincia->id == $colegio->idprovincia)
            <option selected value="{{$provincia->id}}">{{$provincia->nombre}}</option>
            @else
            <option  value="{{$provincia->id}}">{{$provincia->nombre}}</option>
            @endif
            @endforeach
        </select> 
    </div>

    <div class="form-group">
        <label for="contact-number">Tipo de Colegio</label>
        <select class="form-control select2" id="colegio" name="colegio" >
            @if ($colegio->tipoU == "PARTICULAR")
            <option selected value="PARTICULAR">PARTICULAR</option>
            @else
            <option value="PARTICULAR">PARTICULAR</option>
            @endif

            @if ($colegio->tipoU == "FISCAL")
            <option selected value="FISCAL">FISCAL</option>
            @else
            <option value="FISCAL">FISCAL</option>
            @endif

            @if ($colegio->tipoU == "CONVENIO")
            <option selected value="CONVENIO">CONVENIO</option>
            @else
            <option value="CONVENIO">CONVENIO</option>
            @endif

            @if ($colegio->tipoU == "C.I.F.A.")
            <option selected value="C.I.F.A.">C.I.F.A.</option>
            @else
            <option value="C.I.F.A.">C.I.F.A.</option>
            @endif

            @if ($colegio->tipoU == "C.E.A.")
            <option selected value="C.E.A.">C.E.A.</option>
            @else
            <option value="C.E.A.">C.E.A.</option>
            @endif
            @if ($colegio->tipoU == "")
            <option selected value=""></option>
            @endif
        </select> 
    </div>
    @endforeach
    <p id="status"></p>

    <button type="button" onclick="cancelar()"  class="btn btn-default pull-left">CANCELAR</button>
    <button type="button" onclick="modificarcolegio()"  class="btn btn-default pull-right">MODIFICAR</button>

</div>
</div>