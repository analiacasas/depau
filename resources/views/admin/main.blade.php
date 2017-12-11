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
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

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
                        <a class="navbar-brand" href="{{url('/welcome')}}"><img src="images/logojornadas.png" height="55px"  alt=""></a> <!-- Replace with your Logo -->
                    </div>

                    <div class="collapse navbar-collapse" id="main-navigation">         <!-- Main Menu -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{url('/aha')}}">Inicio</a>

                            </li>
                            <li><a href="{{url('/colegio/inicio')}}">Unidades Educativas</a>

                            </li>
                            <li><a href="#">Reservas</a>
                                <ul class="sub-menu">																<!-- Sub Menu -->
                                    <li><a href="video.html">RESERVA</a></li>
                                    <li><a href="modals.html">RESERVA CC-CP</a></li>
                                    <li><a href="call-to-action.html">RESERVA COLEGIO</a></li>
                                    <li><a href="call-to-action.html">IMPRIMIR TEST</a></li>

                                </ul>
                            </li>                        
                            <li><a href="#">Trámites</a>

                            </li>
                            <li><a href="{{url('/')}}">Cerrar Sesión</a>

                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--Aquí va el título de la página que se eligio ej : home/colegio-->

        <div class="page-header">
            <div class="container">
                <h1>    @yield('titulo1','Bienvenido')</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"> @yield('titulo2','Administrativo')</a></li>
                    <li class="active"> @yield('titulo3','Inicio')</li>
                </ul>
            </div>
        </div>
        <!--       Fin del titulo de la página-->




        @yield('contenido')


        <div class="bgcolor3 pt-100 pb-100">
            <!-- espacio antes del footer -->
        </div>
        <div class="clearfix"></div>
        <footer class="footer">         <!-- Footer -->

            <div class="footer-sec">            <!-- Secondary Footer -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 text-center">
                            <span class="copyright">&copy; Copyright Dpto. Orientación</span>           <!-- Copyright Text -->
                        </div>
                        <div class="col-sm-6 text-center">
                            <ul class="social">          <!-- Social Media Links -->
                                <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->


        <div id="back"><i class="fa fa-angle-up"></i></div>     


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

    </body>


    <!-- Mirrored from wwsthemes.com/themes/educomp/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 14:43:21 GMT -->
</html>
