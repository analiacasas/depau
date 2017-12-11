@extends('admin.main')

@section('titulo1','Bienvenido')
@section('titulo2','Administrador')
@section('titulo1','Inicio')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="blog-single">
                <div class="posted-on">
                    <span class="date">21</span>
                    <span class="month">ENE</span>
                </div>
                <div class="blog-media">
                    <img src="images/oficce.jpg" class="img-responsive" alt="">
                </div>

            </div>



        </div>
        <div class="col-sm-4">              <!-- Sidebar -->
            <aside class="widget twitter-widget">
                <h5 class="heading">Bienvenido(a) Administrador (a)</h5>
                <p>
                    Analía Casas Bautista
                </p>
            </aside>
            <aside class="widget search-widget">
                 <blockquote>
                            <p style="font-size: 13px"> Hay tres pautas básicas: tomarse en
                    serio las cosas que uno hace, dedicarse en cuerpo y alma a lograr el
                    objetivo que uno se ha impuesto, y convencerse de que lo importante
                    en la vida es terminar lo que se empieza.</p>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                  
            </aside>
        </div>
    </div>
</div>     
@endsection


