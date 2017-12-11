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
                        <a class="navbar-brand" href="{{url('/welcome')}}"><img src="images/logojornadas.png" height="55px"  alt=""></a> <!-- Replace with your Logo -->
                    </div>

                    <div class="collapse navbar-collapse" id="main-navigation">         <!-- Main Menu -->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Inicio</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Default</a></li>
                                    <li><a href="index-1.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="index-3.html">Home Version 3</a></li>
                                    <li><a href="index-4.html">Home Version 4</a></li>
                                </ul>
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
                            <li><a href="#">Quiénes Somos</a>
                                <ul class="sub-menu">																<!-- Sub Menu -->
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Slider Revolution -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="slider" class="rev_slider fullwidthbanner" data-version="5.0.7">    
                <ul>	
                    <!-- Slide 1 -->
                    <li data-index="rs-129"
                        data-transition="parallaxvertical"
                        data-slotamount="default"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-thumb=""  
                        data-rotate="0"  
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off"  
                        data-title="A STUDY ON HAPPINESS" 
                        data-description="Nurturing the most awesome minds.">

                        <!-- MAIN IMAGE -->
                        <img src="images/jovenes-diversos.jpg" data-lazyload="images/slide-3.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- Overlay-->
                        <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                             id="slide-1-overlay" 
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                             data-width="full"
                             data-height="full"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                             data-start="1000" 
                             data-basealign="slide" 
                             data-responsive_offset="on"
                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 1.00);"> 
                        </div>

                        <!-- Small Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" 
                             id="slide-1-small-text" 
                             data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" 
                             data-width="none"
                             data-fontsize="['22', '22', '22', '16']"
                             data-height="28"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on" 
                             style="z-index: 6; white-space: nowrap; font-weight:bold; font-family: 'Libre Baskerville', serif;">TALLERES DE ORIENTACIÓN.
                        </div>                            

                        <!-- Main Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                             id="slide-1-main-text" 
                             data-x="['right','right','right','right']" data-hoffset="['50','50','50','30']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" 
                             data-fontsize="['46','46','46','32']"
                             data-lineheight="['55','55','55','35']"
                             data-color="['#fff']"
                             data-width="['600','600','600','420']"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on" 
                             style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:right; font-family: 'Montserrat', sans-serif;">Te ayudamos con tus decisiones.
                        </div>

                        <!-- Button -->
                        <a href="brief-history.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs" 
                           id="slide-1-button" 
                           data-x="['right','right','right','right']" data-hoffset="['53','53','53','30']" 
                           data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                           data-mask_in="x:0px;y:0px;" 
                           data-mask_out="x:0;y:0;" 
                           data-start="1000" 
                           data-splitin="none" 
                           data-splitout="none" 
                           data-responsive_offset="on" 
                           data-responsive="off"
                           style="z-index: 8;">VER MÁS 
                        </a>
                    </li>

                    <!-- Slide 2 -->
                    <li data-index="rs-2"
                        data-transition="parallaxvertical"
                        data-slotamount="default"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-thumb=""  
                        data-rotate="0"  
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off"  
                        data-title="A STUDY ON HAPPINESS" 
                        data-description="Nurturing the most awesome minds.">
                        <!-- MAIN IMAGE -->
                        <img src="images/jovenes3.jpg" data-lazyload="images/slide-2.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- Overlay -->
                        <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
                             id="slide-2-overlay"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                             data-width="full"
                             data-height="full"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                             data-start="1000" 
                             data-basealign="slide" 
                             data-responsive_offset="on" 
                             style="z-index: 9;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 1.00);"> 
                        </div>

                        <!-- Small Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" 
                             id="layer-2-small-text" 
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" 
                             data-width="none"
                             data-fontsize="['22', '22', '22', '16']"
                             data-height="28"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on" 
                             style="z-index: 10; white-space: nowrap; font-weight:bold; font-family: 'Libre Baskerville', serif;">TEST PSICOTÉCNICO.
                        </div>                            

                        <!-- Main Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                             id="slide-2-main-text" 
                             data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                             data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" 
                             data-fontsize="['46','46','46','32']"
                             data-lineheight="['55','55','55','35']"
                             data-color="['#fff']"
                             data-width="['600','600','600','420']"
                             data-height="none"
                             data-whitespace="normal"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                             data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                             data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on" 
                             style="z-index: 11; min-width: 600px; max-width: 600px; white-space: normal; text-shadow:0px 2px 2px #000; text-transform:capitalize; font-weight:600; text-align:left; font-family: 'Montserrat', sans-serif;">Te brindamos asesoramiento.
                        </div>

                        <!-- Button -->
                        <a href="about-educomp.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs" 
                           id="slide-2-button" 
                           data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                           data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-transform_idle="o:1;"
                           data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                           data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                           data-mask_in="x:0px;y:0px;" 
                           data-mask_out="x:0;y:0;" 
                           data-start="1000" 
                           data-splitin="none" 
                           data-splitout="none" 
                           data-responsive_offset="on" 
                           data-responsive="off"
                           style="z-index: 12;">IR TEST
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Revolution Slider Ends -->	

        <div class="bgcolor2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn-announce"><i class="fa fa-bullhorn"></i></button>
                        <div class="announcement">
                            <div class="announcement-text">
                                <span>School will remain closed on account of heavy rains</span>
                                <span>Exams postponed by 10 days due to Annual Day celebrations</span>
                                <span>Late Fee of 10% to be charged from defaulters</span>
                            </div>
                            <div class="owl-nav">
                                <span class="owl-left"><i class="fa fa-angle-left"></i></span>
                                <span class="owl-right"><i class="fa fa-angle-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="bgcolor3 pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="heading text-center">POR QUÉ  <span class="color2">VISITARNOS</span>
                            <span class="sub-heading">Somos una unidad de servicios psicopedagógicos y apoyo especializado al proceso de orientación vocacional y profesional del nivel de educación secundaria y superior.</span>
                            <span class="icon-divider"></span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Talleres de Orientación</h5>
                                <span>Diferentes talleres abordando temáticas actuales.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Entrevistas Personalizadas</h5>
                                <span>Se cuenta con profesionales en el área.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Jornadas de Orientación</h5>
                                <span> Jornadas de orientación e información.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Cursos de Nivelación</h5>
                                <span>Se brindan ejercicios y cuadernillos de ayuda.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Ayuda a temas de Investigación</h5>
                                <span>Se brinda apoyo con la información y soporte.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-box-1">
                            <div class="icon-box-icon">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="icon-box-content">
                                <h5 class="heading">Proyecto OV-PAB</h5>
                                <span>Conjunto de Talleres de Orientación.</span>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>    

        <div class="gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-overlay">
                        <h2 class="gallery-heading">Life At Educomp</h2>
                    </div>
                    <div class="col-sm-3 no-gutter">
                        <div class="img-box">
                            <a href="images/gallery-4.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-4.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-3 no-gutter">
                        <div class="img-box">
                            <a href="images/gallery-6.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-6.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="img-box">
                            <a href="images/gallery-1.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-1.jpg" alt="" class="img-responsive">
                        </div>                    
                    </div>
                    <div class="col-sm-3 no-gutter">
                        <div class="img-box">
                            <a href="images/gallery-2.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="img-box">
                            <a href="images/gallery-3.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-3.jpg" alt="" class="img-responsive">
                        </div>                    
                    </div>
                    <div class="col-sm-3 no-gutter">
                        <div class="img-box">
                            <a href="images/gallery-5.jpg" data-gal="prettyPhoto[galleryName]" class="img-zoom"><i class="fa fa-search"></i></a>
                            <img src="images/gallery-5.jpg" alt="" class="img-responsive">
                        </div>
                    </div>                
                </div>
            </div>
        </div>

        <div class="bgcolor3 pt-100 pb-100">
            <!-- espacio antes del footer -->
        </div>
        <div class="clearfix"></div>
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

    </body>


    <!-- Mirrored from wwsthemes.com/themes/educomp/v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 14:43:21 GMT -->
</html>
