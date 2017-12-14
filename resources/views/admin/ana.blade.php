
  <script src="{{asset('js/jquery-2.2.3.min.js')}}" type=text/javascript></script>
           <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>     
           

 <div class="form-group">
          <label for="contact-email">SIE</label>
        <input placeholder="SIE" id="contact-email" type="text" class="form-control" id="sie" name="sie">
      
    </div>
    <div class="form-group">
            <label for="contact-name">Nombre de la Unidad Educativa</label>
        <input placeholder="NOMBRE" id="contact-name autofocus" type="text" class="form-control" id="nombre" name="nombre">
    
    </div>
 <button type="button" onclick="insertarcolegio()"  class="btn btn-default pull-right">AGREGAR</button>
 <script> 
 function insertarcolegio(){

//    var sie = $('#sie').val();
//    var pr = $('#provincia').val();
//    var colegio = $('#colegio').val();
////    if (validarcolegio() == true) {
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function() {
//        if (xhttp.readyState === 4 && xhttp.status === 200) {
////            var elemento = document.getElementById("editar");
////            elemento.style.display = 'none';
////                pagination(1);
//            alert("Se insertó correctamente: " + nombre);
//        }
//    };
//    xhttp.open("GET", ruta + "insertarbd-colegio", true);
//    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    var datos = "nombre=" + nombre + "&sie=" + sie + "&provincia=" + pr + "&colegio=" + colegio;
//    xhttp.send(datos);
//    }
  var nombre = $('#sie').val();
 alert("Se insertó correctamente: "+nombre);
}
</script>