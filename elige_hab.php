<?php
    require 'idiomas/es.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hospedería de Alesves - Alojamiento</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/hospederia-de-alesves.gif" />
    <link rel="icon" href="images/hospederia-de-alesves.gif">

    <!-- ========== STYLESHEETS ========== --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/famfamfam-flags.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
 
    <div id="smoothpage" class="wrapper">
        
        <!-- ========== TOP MENU ========== -->
        <div class="top_menu">
            <div class="container">
                <div class="welcome_mssg hidden-xs">
                    <?php echo $welcome;?>
                </div>
                <ul class="top_menu_right">
                    <li><i class="fa fa-phone"></i><a href="tel:948845686">(+34) 948 845 686 </a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <a href="#" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                                <i class="famfamfam-flag-gb "></i><?php echo $idioma['1'];?><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="famfamfam-flag-gr"></i><?php echo $idioma['2'];?></a></li>
                                <li><a href="#"><i class="famfamfam-flag-it"></i><?php echo $idioma['3'];?></a></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ========== HEADER ========== -->
        <header class="fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="position: relative;top:-30px;">
                        <img src="images/hospederia-de-alesves.gif" height="74" alt="Logo">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1']?></li>
                        <li class="dropdown simple_menu">
                            <a href="index.php"><?php echo $menu['2']?><b class="caret"></b></a>                           
                        </li>
                        <li class="dropdown simple_menu active">
                            <a href="elige_hab.php"><?php echo $menu['3']?><b class="caret"></b></a>                            
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="banners.php"><?php echo $menu['4']?><b class="caret"></b></a>                            
                        </li>
                        <li><a href="contacto.php"><?php echo $menu['5']?></a></li>
                        <li class="menu_button">
                            <a href="bookin.php" class="button  btn_yellow"><i class="fa fa-calendar"></i><?php echo $menu['6']?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg) center repeat;">
            <div class="container">
                <div class="inner">
                    <h1><?php echo $elige_hab;?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><?php echo $inicio;?></a></li>
                        <li><?php echo $elige_hab;?></li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="rooms_list">
           <div class="container">
              <!-- ITEM -->
              <article class="room_list">
                 <div class="row row-flex">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <figure>
                           <a href="habitacion.php?tipo=individual" class="hover_effect h_link h_blue">
                              <img src="images/habitacion_1.jpg" class="img-responsive" alt="Image">
                          </a>
                       </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                       <div class="room_details row-flex">
                          <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                              <h3><a href="habitacion.php?tipo=individual"><?php echo $habitacion['1'];?></a></h3>
                             <p><?php echo $habitacion['1.1'];?></p>
                             <div class="room_services">                                
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['1'];?>" data-original-title="<?php echo $servicios['2'];?>"></i>                                 
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['3'];?>" data-original-title="<?php echo $servicios['4'];?>"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['5'];?>" data-original-title="<?php echo $servicios['6'];?>"></i>     
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                             <div class="room_price_inner">
                                <span class="room_price_number">56.00€</span>
                                <small class="upper"><?php echo $pornoche;?></small>
                                <a href="bookin.php?tipo=individual" class="button  btn_blue btn_full upper"><?php echo $rahora;?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </article>
               <!-- ITEM -->
              <article class="room_list">
                 <div class="row row-flex">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                       <figure>
                           <a href="habitacion.php?tipo=doble" class="hover_effect h_link h_blue">
                              <img src="images/habitacion_3.jpg" class="img-responsive" alt="Image">
                          </a>
                       </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                       <div class="room_details row-flex">
                          <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                             <h3><a href="habitacion.php?tipo=doble"><?php echo $habitacion['2'];?></a></h3>
                             <p><?php echo $habitacion['2.1'];?></p>
                             <div class="room_services">
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['1'];?>" data-original-title="<?php echo $servicios['2'];?>"></i>                                 
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['3'];?>" data-original-title="<?php echo $servicios['4'];?>"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['5'];?>" data-original-title="<?php echo $servicios['6'];?>"></i>     
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                             <div class="room_price_inner">
                                <span class="room_price_number">68.00€</span>
                                <small class="upper"><?php echo $pornoche;?></small>
                                <a href="bookin.php?tipo=doble" class="button  btn_blue btn_full upper"><?php echo $rahora;?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </article>
              <!-- ITEM -->
              <article class="room_list">
                 <div class="row row-flex">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                       <figure>
                           <a href="habitacion.php?tipo=superior" class="hover_effect h_link h_blue">
                              <img src="images/habitacion_2.jpg" class="img-responsive" alt="Image">
                          </a>
                       </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                       <div class="room_details row-flex">
                          <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                              <h3><a href="habitacion.php?tipo=superior"><?php echo $habitacion['3'];?></a></h3>
                             <p><?php echo $habitacion['3.1'];?></p>
                             <div class="room_services">                                
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['1'];?>" data-original-title="<?php echo $servicios['2'];?>"></i>                                 
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['3'];?>" data-original-title="<?php echo $servicios['4'];?>"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['5'];?>" data-original-title="<?php echo $servicios['6'];?>"></i>     
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                             <div class="room_price_inner">
                                <span class="room_price_number">77.00€</span>
                                <small class="upper"><?php echo $pornoche;?></small>
                                <a href="bookin.php?tipo=superior" class="button  btn_blue btn_full upper"><?php echo $rahora;?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </article>
                 <!-- ITEM -->
              <article class="room_list">
                 <div class="row row-flex">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                       <figure>
                           <a href="habitacion.php?tipo=triple" class="hover_effect h_link h_blue">
                              <img src="images/habitacion_3.jpg" class="img-responsive" alt="Image">
                          </a>
                       </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                       <div class="room_details row-flex">
                          <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                              <h3><a href="habitacion.php?tipo=triple"><?php echo $habitacion['4']?></a></h3>
                             <p><?php echo $habitacion['4.1'];?></p>
                             <div class="room_services">
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['1'];?>" data-original-title="<?php echo $servicios['2'];?>"></i>                                 
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['3'];?>" data-original-title="<?php echo $servicios['4'];?>"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['5'];?>" data-original-title="<?php echo $servicios['6'];?>"></i>     
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                             <div class="room_price_inner">
                                <span class="room_price_number">86.00€</span>
                                <small class="upper"><?php echo $pornoche;?></small>
                                <a href="bookin.php?tipo=triple" class="button  btn_blue btn_full upper"><?php echo $rahora;?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </article>
              <article class="room_list">
                 <div class="row row-flex">
                    <div class="col-lg-4 col-md-5 col-sm-12">
                       <figure>
                          <a href="habitacion.php?tipo=familiar" class="hover_effect h_link h_blue">
                              <img src="images/habitacion_4.jpg" class="img-responsive" alt="Image">
                          </a>
                       </figure>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                       <div class="room_details row-flex">
                          <div class="col-md-9 col-sm-9 col-xs-12 room_desc">
                             <h3><a href="habitacion?tipo=familiar"><?php echo $habitacion['5'];?></a></h3>
                             <p><?php echo $habitacion['5.1'];?></p>
                             <div class="room_services"> 
                                <i class="fa fa-cutlery" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['1'];?>" data-original-title="<?php echo $servicios['2'];?>"></i>                                 
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['3'];?>" data-original-title="<?php echo $servicios['4'];?>"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $servicios['5'];?>" data-original-title="<?php echo $servicios['6'];?>"></i>     
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12 room_price">
                             <div class="room_price_inner">
                                <span class="room_price_number">118.00€</span>
                                <small class="upper"><?php echo $pornoche;?></small>
                                <a href="bookin.php?tipo=familiar" class="button  btn_blue btn_full upper"><?php echo $rahora;?></a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </article>             
           </div>
        </main>

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.html"><img class="logo" src="images/hospederia-de-alesves.gif" height="80" alt="Logo"></a>
                                <?php echo $descr;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $noticias;?></h5>
                            <ul class="blog_posts">
                                <li><a href="http://www.villafranca.es/">Villafranca</a> <small>Web <?php echo $ayuntamiento;?> Villafranca</small></li>
                                <li><a href="http://www.tudela.es/">Tudela</a> <small>Web <?php echo $ayuntamiento;?> Tudela</small></li>
                                <li><a href="http://www.olite.es/">Olite</a> <small>Web <?php echo $ayuntamiento;?> Olite</small></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $actividades;?></h5>
                            <ul class="useful_links">
                                <li><a href="http://www.lasbardenasreales.com/">Las Bardenas Reales</a></li>
                                <li><a href="https://www.olite.com.es/">Olite</a></li>
                                <li><a href="https://www.turismo.navarra.es/esp/home/">Turismo Navarra</a></li>
                                <li><a href="https://www.larutadelcister.info/es">Ruta del Císter</a></li>
                                <li><a href="https://www.sendaviva.com/">Senda Viva</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $contact_us;?></h5>
                            <address>
                                <ul class="address_details">
                                    <li><i class="glyphicon glyphicon-map-marker"></i>C/ bajo el arco, 34, 31330 Villafranca, Navarra</li>
                                    <li><i class="glyphicon glyphicon-phone-alt"></i> <?php echo $telefono;?>: <a href="tel:948845686">(+34) 948 84 56 86</a></li>
                                    <li><i class="fa fa-fax"></i> Fax: (+34) 948 84 61 82</li>
                                    <li><i class="fa fa-envelope"></i> Email: <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                 Copyright 2020 <a href="index.html">Hospedería de Alesves</a><?php echo ' '.$derechos;?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- ========== BACK TO TOP ========== -->
    <div id="back_to_top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ========== JAVASCRIPT ========== -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.smoothState.js"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/morphext.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.thumbs.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jPushMenu.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/countUp.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>