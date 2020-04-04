<?php
    require 'idiomas/language.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hospedería de Alesves - Contacto</title>
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
                    <li><i class="fa fa-phone"></i><a href="tel:948845686"> (+34) 948 845 686 </a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <a href="#" class="dropdown-toggle select" data-hover="dropdown" data-toggle="dropdown">
                                <i class="famfamfam-flag-es "></i><?php echo $idioma['1']?><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="famfamfam-flag-gr"></i><?php echo $idioma['2']?></a></li>
                                <li><a href="#"><i class="famfamfam-flag-it"></i><?php echo $idioma['3']?></a></li>
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
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1'];?></li>
                        <li class="dropdown simple_menu">
                            <a href="index.php" data-toggle="dropdown"><?php echo $menu['2'];?></a>                            
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="elige_hab.php"><?php echo $menu['3'];?><b class="caret"></b></a>                            
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="banners.php"><?php echo $menu['4'];?><b class="caret"></b></a>                            
                        </li>
                        <li class="dropdown simple_menu active">
                            <a href="contacto.php"><?php echo $menu['5'];?></a>
                        </li>
                        <li class="menu_button">
                            <a href="bookin.php" class="button  btn_yellow"><i class="fa fa-calendar"></i><?php echo $menu['6'];?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg) center repeat;">
            <div class="container">
                <div class="inner">
                    <h1><?php echo $contacto;?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><?php echo $inicio;?></a></li>
                        <li><?php echo $contacto;?></li>
                    </ol>
                </div>
            </div>
        </div>
        
        <!-- =========== MAIN ========== -->
        <main id="contact_page_style_2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8">
                        <?php if(isset($_GET['mail'])) { ?>
                        <div class="main_title  a_left">
                            <h2><?php echo $form_mail;?></h2>
                        </div>
                        <?php }else{ ?>
                        <div class="main_title  a_left">
                            <h2><?php echo $contact_us_MAY;?></h2>
                        </div>
                        <form id="contact-form-page" method='post' action=''>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">Nombre:</label>
                                    <input type="text" class="form-control" name="name" placeholder="<?php echo $form_mail['2'];?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">Teléfono:</label>
                                    <input type="text" class="form-control" name="phone" placeholder="<?php echo $phone;?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="<?php echo $form_mail['3'];?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label">Asunto</label>
                                    <input type="text" class="form-control" name="subject" placeholder="<?php echo $asunto;?>">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label">Mensaje</label>
                                    <textarea class="form-control" name="message" placeholder="<?php echo $form_mail['4'];?>"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i><?php echo $form_mail['5'];?></button>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                    
                    <div class="col-md-4">
                        <div id="contact-page22">
                            <div class="embed-responsive-item">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1476.008799115618!2d-1.7498762!3d42.2781477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5a66cbeca9a55f%3A0xa339c0ae8d943e1f!2sHospeder%C3%ADa%20de%20Alesves%20(Entre%20las%20Bardenas%20y%20los%20r%C3%ADos)!5e0!3m2!1ses!2ses!4v1580839915806!5m2!1ses!2ses" width="350" height="130" frameborder="0" style="border:0;" allowfullscreen></iframe>
                            </div>
                              <ul class="contact-info upper mt40">
                            <li>
                                <span class="ci_item"><?php echo $contact_titles['1'];?></span>
                                Calle Bajo el Arco, 34, 31330 Villafranca, Navarra
                            </li>
                            <li>
                                <span class="ci_item">EMAIL:</span>
                                <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a>, <a href="mailto:hospederiadealesves@gmail.com">hospederiadealesves@gmail.com</a>
                            </li>
                            <li>
                                <span class="ci_item">WEB:</span>
                                wwww.hospederiadealesves.com
                            </li>
                            <li>
                                <span class="ci_item"><?php echo $contact_titles['2'];?></span>
                                <a href="tel:948845686">(+34) <strong>948 84 56 86</strong></a>
                            </li>
                            <li>
                                <span class="ci_item">FAX:</span> 
                                <strong>(+34) 948 84 61 82</strong>
                            </li>
                        </ul>

                            <div class="social_media">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.php"><img class="logo" src="images/hospederia-de-alesves.gif" height="32" alt="Logo"></a>
                                <?php echo $descr;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $noticias;?></h5>
                            <ul class="blog_posts">
                                <li><a href="http://www.villafranca.es/">Villafranca</a> <small>Web ayuntamiento Villafranca</small></li>
                                <li><a href="http://www.tudela.es/">Tudela</a> <small>Web ayuntamiento Tudela</small></li>
                                <li><a href="http://www.olite.es/">Olite</a> <small>Web ayuntamiento Olite</small></li>
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
                                        <li><i class="glyphicon glyphicon-map-marker"></i>Calle Bajo el Arco, 34, 31330 Villafranca, Navarra</li>
                                        <li><i class="glyphicon glyphicon-phone-alt"></i><?php echo $telefono; ?><a href="tel:948845686">(+34) 948 845 686</a> </li>
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
                                Copyright 2020 <a href="index.html">Hospedería de Alesves</a> <?php echo $derechos;?>
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
        
   <!-- ========== NOTIFICATION ========== -->
    <div id="notification"></div>
    
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
