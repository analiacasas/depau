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
    var nombre = $('#nombre').val();
    var sie = $('#sie').val();
    var pr = $('#provincia').val();
    var colegio = $('#colegio').val();
    var route = "addcolegio";
    var token = $("#token").val();
    $.ajax({
        url: ruta + route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'html',
        data: "nombre=" + nombre + "&sie=" + sie + "&provincia=" + pr + "&colegio=" + colegio,
        success: function(data) {
            var elemento = document.getElementById("editar");
            elemento.style.display = 'none';
            listProduct();
            alert("Se agregó correctamente");
        }

    });
}
function modificar(val) {
    var elemento = document.getElementById("editar");
    elemento.style.display = 'block';
    var route = 'modificarcolegio';
    var token = $("#token").val();
    $.ajax({
        url: ruta + route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'html',
        data: "id=" + val,
        success: function(data) {
            $('#editar').empty().html(data);
        }

    });
}
function modificarcolegio() {
    var route = 'modcolegio';
    var id = $('#nro').val();
    var nombre = $('#nombre').val();
    var sie = $('#sie').val();
    var pr = $('#provincia').val();
    var colegio = $('#colegio').val();
    var token = $("#token").val();
    $.ajax({
        url: ruta + route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'html',
        data: "nombre=" + nombre + "&sie=" + sie + "&provincia=" + pr + "&colegio=" + colegio + "&id=" + id,
        error: function() {
            alert("Error de conexión, intente de nuevo por favor");
        },
        success: function(data) {
            var elemento = document.getElementById("editar");
            elemento.style.display = 'none';
            listProduct();
            alert("Se modificó correctamente Nro: " + id);
        }
    });
}

function eliminar(val) {
    var route = 'eliminarcolegio';
    var token = $("#token").val();
    $.ajax({
        url: ruta + route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'html',
        data: "id=" + val,
        success: function(data) {
            listProduct();
            alert("Se eliminó correctamente Nro: " + val);
        }

    });
}
function cancelar() {
    var elemento = document.getElementById("editar");
    elemento.style.display = 'none';
}
/*
 * funcion para no hacer cargar toda la pagina en la funcion de paginar de laravel
 */
$(document).on("click", ".pagination li a", function(e) {
    e.preventDefault();

    var url = $(this).attr("href");
//    alert(url);
    $.ajax({
        type: 'get',
        url: url,
        success: function(data) {
            $('#listado').empty().html(data);
        }
    });

});

$(document).ready(function() {
    /*
     * cuando carga completamente la pagina se ordena que se liste automaticamente
     */
    listProduct();
    /*
     * a medida que se vaya escribiendo sobre el input de busqueda este hará la busqueda y la listará
     */
    $("#buscar").keyup(function(e) {
        var parametro = $('#buscar').val();
        var token = $("#token").val();
        var route = "buscarcolegio";
        if (parametro == null || parametro.length == 0 || parametro == '') {
            listProduct();
        } else {
            $.ajax({
                url: ruta + route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'POST',
                dataType: 'html',
                data: "buscar=" + parametro,
                error: function() {
                    alert("Error de conexión");
                },
                success: function(data) {
                    $('#listado').empty().html(data);
                }

            });
        }

    });
});
/*
 * Lista un todos los items de la tabla colegio
 */
var listProduct = function()
{
    $.ajax({
        type: 'get',
        url: ruta + "listar",
        success: function(data) {
            $('#listado').empty().html(data);
        }
    });
}




