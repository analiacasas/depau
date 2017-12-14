/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function insertar() {
    //hace aparecer el div para hacer un insertar
    var elemento = document.getElementById("editar");
    elemento.style.display = 'block';
    var consulta = "insertar";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("editar").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", ruta + "showcolegio", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    var datos = "b=" + consulta;
    xhttp.send(datos);

}
function insertarcolegio() {
//  var nombre = $("#nombre").val();
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
//    xhttp.open("GET",ruta+"insertarbd-colegio", true);
//    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//    var datos = "nombre=" + nombre + "&sie=" + sie + "&provincia=" + pr + "&colegio=" + colegio;
//    xhttp.send(datos);
////  alert("Se insertó correctamente: " + colegio);

    var nombre = $("#nombre").val();
    var sie = $("#sie").val();
    var pr = $('#provincia').val();
    var colegio = $('#colegio').val();
    var token = $("input[nombre=_token]").val();

    var route = 'addcolegio';
    var dataSting = "nombre=" + nombre;


    $.ajax({
     //  url: ruta+'/addcolegio',
        url: "{{url('addcolegio')}}",
        headers: {'X-CSRF-TOKEN': token},
        type: 'post ',
        datatype: 'json',
        data: dataSting,
        success: function(data)
        {
            if (data.success == 'true')
            {
//                document.location.href = '{{ route("mark.index")}}';
                alert("se insertó correctamente" + nombre);
            }
        },
        error: function(data)
        {

//            $("#error").html(data.responseJSON.name);
//            $("#message-error").fadeIn();
        }
    })




}

function cancelar() {
    var elemento = document.getElementById("editar");
    elemento.style.display = 'none';
}
