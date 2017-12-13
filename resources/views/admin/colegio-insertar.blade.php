<div class="col-sm-12 mt-20">
    <h4 class="heading">Añadir <span class="color2">Unidad Educativa</span></h4>
    <div class="form-group">
          <label for="contact-email">SIE</label>
        <input placeholder="SIE" id="contact-email" type="text" class="form-control" id="sie" nombre="sie">
      
    </div>
    <div class="form-group">
            <label for="contact-name">Nombre de la Unidad Educativa</label>
        <input placeholder="NOMBRE" id="contact-name autofocus" type="text" class="form-control" id="nombre" name="nombre">
    
    </div>

    <div class="form-group">
           <label for="contact-number">Provincia</label>
        <select  class="form-control select2" id="provincia" name="provincia" style="width: 100%;">
            <option value="">-SELECCIONE UNA PROVINCIA-</option>
            @foreach($provincias as $provincia)
            <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
            @endforeach
        </select> 
    </div>
 
            <div class="form-group">
                  <label for="contact-number">Tipo de Colegio</label>
                <select class="form-control select2" id="colegio" name="colegio" >
                    <option value="">-SELECCIONE UN TIPO DE COLEGIO-</option>
                    <option value="PARTICULAR">PARTICULAR</option>
                    <option value="FISCAL">FISCAL</option>
                    <option value="CONVENIO">CONVENIO</option>
                    <option value="C.I.F.A.">C.I.F.A.</option>
                    <option value="C.E.A.">C.E.A.</option>
                </select> 
              
            </div>
            <p id="status"></p>
         
            <button type="button" onclick="cancelar()"  class="btn btn-default pull-left">CANCELAR</button>
            <button type="button" onclick="insertarcolegio()"  class="btn btn-default pull-right">AGREGAR</button>

    </div>
</div>