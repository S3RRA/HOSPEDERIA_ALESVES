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
    <title>Hospedería de Alesves - Habitación</title>
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
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1'];?></li>
                        <li class="simple_menu">
                            <a href="index.php" data-toggle="dropdown"><?php echo $menu['2'];?></a>                            
                        </li>
                        <li class="simple_menu active">
                            <a href="elige_hab.php"><?php echo $menu['3'];?><b class="caret"></b></a>                            
                        </li>
                        <li class="simple_menu">
                            <a href="banners.php"><?php echo $menu['4'];?><b class="caret"></b></a>                            
                        </li>
                        <li><a href="contacto.php"><?php echo $menu['5'];?></a></li>
                        <li class="menu_button">
                            <a href="bookin.php" class="button  btn_yellow"><i class="fa fa-calendar"></i><?php echo $menu['6'];?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <?php 
            if($_GET['tipo']=='individual'){
                $precio=56;$img='images/habitacion_1.jpg';
                $precio2=68;$img2='images/habitacion_3.jpg';$tit2='Doble';$tipo2='?tipo=doble';
                $precio3=77;$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=86;$img4='images/habitacion_3.jpg';$tit4='Triple';$tipo4='?tipo=triple';
            }else if($_GET['tipo']=='doble'){
                $precio=68;$img='images/habitacion_3.jpg';
                $precio2=77;$img2='images/habitacion_2.jpg';$tit2='Superior';$tipo2='?tipo=superior';
                $precio3=86;$img3='images/habitacion_3.jpg';$tit3='Triple';$tipo3='?tipo=triple';
                $precio4=56;$img4='images/habitacion_1.jpg';$tit4='Individual';$tipo4='?tipo=individual';
            }else if($_GET['tipo']=='superior'){
                $precio=77;$img='images/habitacion_2.jpg';
                $precio2=86;$img2='images/habitacion_3.jpg';$tit2='Triple';$tipo2='?tipo=triple';
                $precio3=68;$img3='images/habitacion_3.jpg';$tit3='Doble';$tipo3='?tipo=doble';
                $precio4=56;$img4='images/habitacion_1.jpg';$tit4='Individual';$tipo4='?tipo=individual';
            }else if($_GET['tipo']=='triple'){
                $precio=86;$img='images/habitacion_3.jpg';
                $precio2=118;$img2='images/habitacion_4.jpg';$tit2='Familiar';$tipo2='?tipo=familiar';
                $precio3=77;$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=68;$img4='images/habitacion_3.jpg';$tit4='Doble';$tipo4='?tipo=doble';
            }else if($_GET['tipo']=='familiar'){
                $precio=118;$img='images/habitacion_4.jpg';
                $precio2=86;$img2='images/habitacion_3.jpg';$tit2='Triple';$tipo2='?tipo=triple';
                $precio3=77;$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=68;$img4='images/habitacion_3.jpg';$tit4='Doble';$tipo4='?tipo=doble';
            }else if($_GET['tipo']=='trabajadores'){
                $precio=75;$img='images/habitacion_1.jpg';
                $precio2=56;$img2='images/habitacion_1.jpg';$tit2='Individual';$tipo2='?tipo=individual';
                $precio4=68;$img4='images/habitacion_3.jpg';$tit4='Doble';$tipo4='?tipo=doble';                
                $precio3=77;$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
            }else if($_GET['tipo']=='pareja'){
                $precio=190;$img='images/habitacion_2.jpg';
                $precio2=77;$img2='images/habitacion_2.jpg';$tit2='Superior';$tipo2='?tipo=superior';
                $precio3=68;$img3='images/habitacion_3.jpg';$tit3='Doble';$tipo3='?tipo=doble';
                $precio4=118;$img4='images/habitacion_4.jpg';$tit4='Familiar';$tipo4='?tipo=familiar';
            }
        ?>
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg) center repeat;">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1><?php echo $abitacion.' '.$_GET['tipo']; ?></h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><?php echo $inicio;?></a></li>
                                <li><?php echo $alojamiento;?></li>
                                <li><?php echo $abitacion.' '.$_GET['tipo']; ?></li>
                            </ol>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="price">
                                <div class="inner">
                                    <?php echo $precio;?>€<span>/ <?php echo $noche;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main id="room_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="slider">
                            <div id="slider-larg" class="owl-carousel image-gallery">
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="<?php echo $img; ?>" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="<?php echo $img; ?>" alt="Image">
                                    </a>
                                </div>
                                <!-- ITEM -->
                                <div class="item lightbox-image-icon">
                                    <a href="<?php echo $img; ?>" class="hover_effect h_lightbox h_blue">
                                        <img class="img-responsive" src="<?php echo $img; ?>" alt="Image">
                                    </a>
                                </div>                                
                            </div>
                            <div id="thumbs" class="owl-carousel">
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="<?php echo $img; ?>" alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-responsive" src="<?php echo $img; ?>" alt="Image"></div>
                            </div>
                        </div>
                        <div class="main_title mt50">
                            <h2><?php echo $sobrehab['1'];?></h2>
                        </div>
                        <p><?php if($_GET['tipo']=='trabajadores'){echo'Incluye habitación doble de uso individual, desayuno y cena. <b>Válido de lunes a jueves no festivos</b><br><br>';} ?>
                            <?php echo $sobrehab['2'];?>                  
                        </p>
                        
                        <div class="main_title t_style a_left s_title mt50">
                            <div class="c_inner">
                                <h2 class="c_title"><?php echo $serv_hab['1'];?></h2>
                            </div>
                        </div>
                        <div class="room_facilitys_list">
                            <div class="all_facility_list">
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i><?php echo $serv_hab['2'];?></li>
                                        <li><i class="fa fa-check"></i>60m<sup>2</sup></li>
                                        <li><i class="fa fa-check"></i><?php echo $serv_hab['3'];?></li>
                                        <li><i class="fa fa-check"></i><?php echo $serv_hab['4'];?></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 nopadding">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-check"></i><?php echo $serv_hab['5'];?></li>
                                        <li class="no"><i class="fa fa-times"></i><?php echo $serv_hab['6'];?></li>
                                        <li><i class="fa fa-check"></i><?php echo $serv_hab['7'];?></li>
                                        <li class="no"><i class="fa fa-check"></i><?php echo $serv_hab['8'];?></li>
                                    </ul>
                                </div>                               
                            </div>
                        </div>
                        <div class="similar_rooms">
                            <div class="main_title t_style5 l_blue s_title a_left">
                                <div class="c_inner">
                                    <h2 class="c_title"><?php echo $similares;?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="habitacion.php<?php echo $tipo2; ?>" class="hover_effect h_blue h_link"><img src="<?php echo $img2; ?>" alt="Image" class="img-responsive"></a>
                                            <div class="price"><?php echo $precio2;?>€<span>/ <?php echo $noche;?></span></div>
                                            <figcaption>
                                                <h4><a href="habitacion.php<?php echo $tipo2; ?>"><?php echo $tit2;?></a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="habitacion.php<?php echo $tipo3; ?>" class="hover_effect h_blue h_link"><img src="<?php echo $img3;?>" alt="Image" class="img-responsive"></a>
                                            <div class="price"><?php echo $precio3;?>€<span>/ <?php echo $noche;?></span></div>
                                            <figcaption>
                                                <h4><a href="habitacion.php<?php echo $tipo3; ?>"><?php echo $tit3;?></a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article>
                                        <figure>
                                            <a href="habitacion.php<?php echo $tipo4;?>" class="hover_effect h_blue h_link"><img src="<?php echo $img4;?>" alt="Image" class="img-responsive"></a>
                                            <div class="price"><?php echo $precio4;?>€<span>/ <?php echo $noche;?></span></div>
                                            <figcaption>
                                                <h4><a href="habitacion.php<?php echo $tipo4; ?>"><?php echo $tit4;?></a></h4>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar">
                            <aside class="widget">
                                <div class="vbf">
                                    <h2 class="form_title"><i class="fa fa-calendar"></i><?php echo $realiza;?></h2>
                                    <form id="booking-form" class="inner">
                                        <div class="form-group">
                                            <input class="form-control" name="nombre" placeholder="Nombre:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="apellidos" placeholder="Apellidos:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Email:" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="telefono" placeholder="Nº de teléfono:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <div class="form_select">
                                                <select name="booking-roomtype" class="form-control" title="Selecione tipo de habitación:" data-header="Habitación:" disabled>
                                                    <option value="Individual" <?php if($_GET['tipo']=='individual') echo'selected'; ?>><?php echo $habitaciones['2'];?></option>
                                                    <option value="Doble" <?php if($_GET['tipo']=='doble') echo'selected'; ?>><?php echo $habitaciones['3'];?></option>
                                                    <option value="Superior" <?php if($_GET['tipo']=='superior') echo'selected'; ?>><?php echo $habitaciones['4'];?></option>
                                                    <option value="Triple" <?php if($_GET['tipo']=='triple') echo'selected'; ?>><?php echo $habitaciones['5'];?></option>
                                                    <option value="Familiar" <?php if($_GET['tipo']=='familiar') echo'selected'; ?>><?php echo $habitaciones['6'];?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="form_select">
                                                <select name="booking-adults" class="form-control md_noborder_right" title="<?php echo $bookin['5'];?>" data-header="<?php echo $bookin['5'];?>">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="form_select">
                                                <select name="booking-children" class="form-control" title="<?php echo $bookin['6'];?>" data-header="<?php echo $bookin['6'];?>">                                                    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="<?php echo $f_llegada;?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="<?php echo $f_salida;?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="button btn_lg btn_blue btn_full" type="submit"><?php echo $r_hab;?></button>
                                        <div class="a_center mt10">
                                            <a href="bookin.php" class="a_b_f"><?php echo $r_detallada;?></a>
                                        </div>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4><?php echo $help['1'];?></h4>
                                <div class="help">
                                    <?php echo $help['2'];?>
                                    <div class="phone"><i class="fa  fa-phone"></i><a href="tel:948 845 686"> (+34) 948 845 686 </a></div>
                                    <div class="email"><i class="fa  fa-envelope-o "></i><a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></div>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4><?php echo $notelopierdas['1'];?></h4>
                                <div class="latest_posts">
                                    
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/primer-plato.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"><?php echo $notelopierdas['2'];?></a></h6>
                                            <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/habitacion_2.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"></a><?php echo $notelopierdas['3'];?></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/bicicleta-segway.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"><?php echo $notelopierdas['4'];?></a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/monolito.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"><?php echo $notelopierdas['5'];?></a></h6>
                                            <span><i class="fa fa-calendar"></i>23/11/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/olite.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"><?php echo $notelopierdas['6'];?></a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                    <article class="latest_post">
                                        <figure>
                                            <a href="blog-post.html" class="hover_effect h_link h_blue">
                                                <img src="images/turismo-enologico.jpg" alt="Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="blog-post.html"><?php echo $notelopierdas['7'];?></a></h6>
                                            <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                        </div>
                                    </article>
                                </div>
                            </aside>
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
