<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from wwsthemes.com/themes/educomp/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 14:42:14 GMT -->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dpto. Orientación - UAGRM</title>

        <!--Bootstrap Framework Version 3.3.7 --> 
        <link href="{{asset('css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">

        <!--Font Awesome Version 4.5.0 --> 
        <link href="{{asset('css/font-awesome.min.css')}}" type="text/css" rel="stylesheet">

        <!--EDUComp Stylesheets --> 
        <link href="{{asset('css/vendors.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" id="style">
        <link href="{{asset('css/components.css')}}" type="text/css" rel="stylesheet" id="components">

        <link rel="stylesheet" type="text/css" href="{{asset('css/color-switch.css')}}">

        <!--Slider Revolution -->
        <link href="{{asset('slider-revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('slider-revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('slider-revolution/css/navigation.css')}}">

        <!--Google Fonts--> 
        <link href='https://fonts.googleapis.com/css?family=Oswald:300,700,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- Respond.js and HTML shiv provide HTML5 support in older browsers like IE9 and 8 -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79657248-1', 'auto');
  ga('send', 'pageview');

</script>
    </head>

    <body>

        <div class="loader-backdrop">           <!-- Loader -->
            <div class="loader">
                <div class="ball-1"></div>
                <div class="ball-2"></div>
            </div>
        </div>

        <header>            <!-- Header = Topbar + Navigation Bar -->
            <div class="topbar">            <!-- Dark Blue Topbar -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href='tel:3-393358' class="call-us"><i class="fa fa-phone"></i> 3 - 393358</a>          <!-- Change Phone Number Here -->
                        </div>
                        <div class="col-sm-6">
                            <div class="dropdown">          <!-- Language Dropdown -->
                                <button class="btn btn-xs" type="button" data-toggle="modal" data-target="#modal1" id="select-lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-globe"></i> LOG IN
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-default">         <!-- Navigation Bar -->
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle Menu</span>
                            <span>Menu</span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="images/logojornadas.png" height="55px"  alt=""></a> <!-- Replace with your Logo -->
                    </div>

                    <div class="collapse navbar-collapse" id="main-navigation">         <!-- Main Menu -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{url('/')}}">Inicio</a>
                                
                            </li>
                            <li><a href="#">Talleres</a>
                                <ul class="sub-menu">									<!-- Sub Menu -->
                                    <li><a href="brief-history.html">OV PAB</a></li>
                                    <li><a href=about-educomp.html>Ingresos Directos</a></li>
                                    <li><a href="admission-process.html">Bachilleres</a></li>
                                    <li><a href="albums.html">Cambio de Carrera</a></li>
                                    <li><a href="album-single.html">Carrera Paralela</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Carreras</a>

                            </li>                        
                            <li><a href="#">Test Psicotécnico</a>
                                <ul class="sub-menu">																<!-- Sub Menu -->
                                    <li><a href="video.html">Información</a></li>
                                    <li><a href="modals.html">Test Online</a></li>
                                    <li><a href="call-to-action.html">Guía</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Actividades</a>
                                <ul class="sub-menu">																<!-- Sub Menu -->
                                    <li><a href="blog-list-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-list-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">Quiénes Somos</a>
                                <ul class="sub-menu">																<!-- Sub Menu -->
                                    <li><a href="{{url('contacto')}}">Contáctanos</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

          @yield('contenido')
   
        <footer class="footer">         <!-- Footer -->
            <div class="footer-pri">            <!-- Primary Footer -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4 footer-widget">            <!-- Footer Widget - Blog -->
                            <h5 class="heading inverse">Recent <span class="color2">Blog</span></h5>
                            <ul class="blog-thumbnail">
                                <li class="entry">          <!-- Blog Entry Excerpt -->
                                    <div class="entry-content">
                                        <h4 class="entry-header"><a href="blog-single.html">What it takes to be National Best ?</a></h4>
                                        <p class="entry-text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.                                     </p>
                                    </div>
                                </li>
                                <li class="entry">          <!-- Blog Entry Excerpt -->
                                    <div class="entry-content">
                                        <h4 class="entry-header"><a href="blog-single.html">How do we achieve 100% success rate ?</a></h4>
                                        <p class="entry-text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.                                     </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-2 footer-widget">            <!-- Footer Widget - Quick Links -->
                            <h5 class="heading inverse">Quick <span class="color2">Links</span></h5>
                            <ul class="quick-links">
                                <li><a href="brief-history.html">Talleres</a></li>
                                <li><a href="about-educomp.html">About EDUComp</a></li>
                                <li><a href="course-grid.html">Our Courses</a></li>
                                <li><a href="teachers.html">Our Teachers</a></li>
                                <li><a href="upcoming-events.html">Upcoming Events</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 footer-widget">            <!-- Footer Widget - Affiliations -->
                            <h5 class="heading inverse">Affiliations &amp; <span class="color2">Awards</span></h5>
                            <ul class="affiliations">
                                <li><img src="images/university-1.png" class="img-responsive" alt=""></li>
                                <li><img src="images/university-2.png" class="img-responsive" alt=""></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 footer-widget">            <!-- Footer Widget - Policies -->
                            <h5 class="heading inverse">Our <span class="color2">Elements</span></h5>
                            <ul class="quick-links">
                                <li><a href="icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="progress-bars.html">Progress Bars</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 footer-widget">            <!-- Footer Widget - Contact Info -->
                            <h5 class="heading inverse">Contact  <span class="color2">Us</span></h5>
                            <address>
                                <strong>EDUcomp Group Of Institutions</strong>
                                <span>45th Floor,<br/> Newzek Estate Building,<br/> United Kingdom</span>
                            </address>
                            <a href="tel:+4525644563" class="phone"><i class="fa fa-phone fa-fw"></i> +452 564 4563</a>
                            <a href="mailto:test@example.com" class="email"><i class="fa fa-envelope fa-fw"></i> info@company.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-sec">            <!-- Secondary Footer -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <span class="copyright">&copy; Copyright Your Company 2016</span>           <!-- Copyright Text -->
                        </div>
                        <div class="col-sm-6 text-center">
                            <ul class="social">          <!-- Social Media Links -->
                                <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fa fa-lock" data-toggle="modal" data-target="#modal1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="modal1" data-open-onload="false" data-open-delay="2500" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body" style="background-image:url('images/img-login.png'); background-size:cover">

                        <div class="row">
                            <div class="col-md-5 pull-right bginverse pt-20 pb-20">
                                <h4 class="heading">PANEL ADMINISTRATIVO</h4>
                                <p>¡Bienvenido a nuestro registro!</p>
                                <br/>
                                {!! Form::open(['url' => 'login/store' , 'method'=>'POST']) !!}
                                <div class="form-group">
                                    <input id="codigo" name="codigo" type="text" class="form-control" placeholder="Código">
                                    <label for="contact-name">CÓDIGO</label>
                                </div>
                                <div class="form-group">
                                    <input id="pass" name="pass" type="password" class="form-control" placeholder="********">
                                    <label for="contact-email">CONTRASEÑA</label>
                                </div>
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal1">CONTINUAR</button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="back"><i class="fa fa-angle-up"></i></div>     
        <!--
        <div id="switch">
            <ul>
                <li id="yellow"></li>
                <li id="blue"></li>
                <li id="red"></li>
                <li id="green"></li>
            </ul>
        </div>      Back To Top -->

        <!--jQuery Version 2.2.1-->
        <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>

        <!--Bootstrap Framework version 3.3.7-->
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!--Slider Revolution version 5.0-->
        <script type="text/javascript" src="{{asset('slider-revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('slider-revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- Include only when working on Local system. Not required on server -->
        <script type="text/javascript" src="{{asset('slider-revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>    
        <script type="text/javascript" src="{{asset('slider-revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('slider-revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('slider-revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('slider-revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>

        <!-- Countdown Timer Version 2.1.0-->
        <script src="{{asset('js/jquery.countdown.min.js')}}" type="text/javascript"></script>

        <!-- Owl Carousel Version 2.0.0 -->
        <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>

        <!-- CountTo -->
        <script src="{{asset('js/jquery.countTo.js')}}" type="text/javascript"></script>

        <!-- Appear -->
        <script src="{{asset('js/jquery.appear.js')}}" type="text/javascript"></script>

        <!--Pretty Photo Version 3.1.6-->
        <script src="{{asset('js/jquery.prettyPhoto.js')}}" type=text/javascript></script>

        <!-- Parallax Version 1.4.2 -->
        <script src="{{asset('js/parallax.js')}}" type="text/javascript"></script>

        <!--Educomp Custom Script-->
        <script src="{{asset('js/main.js')}}" type=text/javascript></script>

        <script src="{{asset('js/color-switch.js')}}" type="text/javascript"></script>
        <!--Educomp Custom Script-->
    <script src="{{asset('js/main.js')}}" type=text/javascript></script>	
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBOhad9rO7cZIfOLHN3y1fBiUXMQV3SsaY'></script>
    </body>


    <!-- Mirrored from wwsthemes.com/themes/educomp/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 14:43:21 GMT -->
</html>
