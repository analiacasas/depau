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
    xhttp.open("GET",ruta+"insertar-colegio", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    var datos = "b=" + consulta;
    xhttp.send(datos);

}
function insertarcolegio(){
  var nombre = $("#nombre").val();
    var sie = $('#sie').val();
    var pr = $('#provincia').val();
    var colegio = $('#colegio').val();
//    if (validarcolegio() == true) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
//            var elemento = document.getElementById("editar");
//            elemento.style.display = 'none';
//                pagination(1);
            alert("Se insertó correctamente: " + nombre);
        }
    };
    xhttp.open("GET",ruta+"insertarbd-colegio", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var datos = "nombre=" + nombre + "&sie=" + sie + "&provincia=" + pr + "&colegio=" + colegio;
    xhttp.send(datos);
//  alert("Se insertó correctamente: " + colegio);
    }

function cancelar() {
    var elemento = document.getElementById("editar");
    elemento.style.display = 'none';
}
