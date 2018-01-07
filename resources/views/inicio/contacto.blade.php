@extends('inicio.cuerpoPrincipal')
@section('contenido')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79657248-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="page-header">
    <div class="container">
        <h1>Contáctanos</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Contáctanos</li>
        </ul>
    </div>
</div>
<div class="container mt-90 mb-100">
    <div class="row">
        
        <div class="col-sm-12 mt-100">
             
            <!-- Replace Latitude, Logitude and Info Window as per your place -->
            <div class="gmap" id="gmap" data-lat="-17.777916" data-long="-63.1654024" data-info-win="<h6>Departamento de Orientación UAGRM</h6>"></div>
        </div>
        <div class="col-sm-7 mt-40">
            <h4 class="heading">Happy to <span class="color2">help!</span></h4>
            <form id="main-contact-form">
                <div class="form-group">
                    <input id="contact-name" type="text" class="form-control" name="name">
                    <label for="contact-name">Your Name</label>
                </div>
                <div class="form-group">
                    <input id="contact-email" type="text" class="form-control" name="email">
                    <label for="contact-email">Email ID</label>
                </div>
                <div class="form-group">
                    <input id="contact-number" type="text" class="form-control" name="subject">
                    <label for="contact-number">Subject</label>
                </div>
                <div class="form-group">
                    <textarea id="contact-message" class="form-control" rows="6" name="message"></textarea>
                    <label for="contact-message">Your Message</label>
                </div>
                <p id="status"></p>
                <button type="submit" name="submit" class="btn btn-primary">Send Query</button>
            </form>
        </div>
        <div class="col-sm-5 mt-40">
            <h4 class="heading">Ficha de <span class="color2">contacto</span></h4>
            <address>
                <strong>Departamento de Orientación U.A.G.R.M.</strong>
                <br/>
                <span>Segundo Piso,<br> Av. Santa Cruz #162, entre calles Santiago y Charcas,<br> Santa Cruz - Bolivia.</span>
            </address>
            <p class="phone"><i class="fa fa-phone fa-fw"></i> 3-393358</p>
            <p class="phone"><i class="fa fa-whatsapp fa-fw"></i> +591 69169626</p>
            <p class="email"><i class="fa fa-envelope fa-fw"></i> orientaciondepasc@gmail.com</p>
            <br/>
            <h5 class="heading">Síguenos en <span class="color2">Facebook</span></h5>
            <ul class="social">
                <li><a href="https://www.facebook.com/dptoorientacionuagrm/"><i class=" fa fa-facebook"></i></a></li>
             
            </ul>
        </div>

       
    </div>
</div>
@endsection