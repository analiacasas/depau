/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function insertarcolegio() {
    //hace aparecer el div para hacer un insertar
    var elemento = document.getElementById("editar");
//    elemento.style.display = 'block';
    var consulta = "insertar";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
            document.getElementById("editar").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("POST", "/colegio/insertar", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    var datos = "b=" + consulta;
    xhttp.send(datos);
}
