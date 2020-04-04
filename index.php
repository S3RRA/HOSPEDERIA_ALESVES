<?php
    session_start();
    require './idiomas/language.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hospedería de Alesves</title>
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
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="top_menu">
            <div class="container">
                <div class="welcome_mssg hidden-xs">
                    <?php echo $welcome ?>
                </div>
                <ul class="top_menu_right">
                    <li><i class="fa fa-phone"></i><a href="tel:948845686"> (+34) 948 845 686</a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <?php echo $idioma['1'];?>
                            <ul class="dropdown-menu">
                                <li><?php echo $idioma['2'];?></li>
                                <li><?php echo $idioma['3']; ?></li>                                
                                <li><?php echo $idioma['4']; ?></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== HEADER ========== -->
        <header class="fixed transparent">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1'];?></li>
                        <li class="simple_menu active">
                            <a href="index.php" data-toggle="dropdown"><?php echo $menu['2'];?></a>                            
                        </li>
                        <li class="simple_menu">
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
        
        <!-- ========== REVOLUTION SLIDER ========== -->
        <section id="slider" class="full_slider">
            <div class="rev_slider_wrapper fullscreen-container">
                <div id="fullscreen_slider" class="rev_slider fullscreenbanner gradient_slider" style="display:none">
                    <ul>                        
                        <!-- SLIDE NR. 1 -->  
                        <li data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="images/06_exterior.jpg" 
                                 alt="Image" 
                                 title="slider_bg1-1" 
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 data-bgparallax="10" 
                                 class="rev-slidebg" 
                                 data-no-retina="">
                             <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center" 
                                 data-hoffset="" 
                                 data-y="middle" 
                                 data-voffset="['-30','-30','-30','-30']" 
                                 data-responsive_offset="on" 
                                 data-fontsize="['60','50','40','30']" 
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap" 
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;"><?php echo $slider['1'];?>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center" 
                                 data-hoffset="" 
                                 data-y="middle" 
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']" 
                                 data-lineheight="['16', '16', '14', '12']" 
                                 data-whitespace="nowrap" 
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                 data-start="3000" 
                                 data-splitin="chars" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive="off" 
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;"><?php echo $slider['2'];?>
                            </div>   
                        </li>

                        <!-- SLIDE NR. 2 -->
                        <li data-transition="fade" 
                            data-slotamount="7"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="images/entrada_hospederia.jpg" 
                                 alt="Image" 
                                 title="slider_bg1-2"
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 data-bgparallax="10" 
                                 class="rev-slidebg" 
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center" 
                                 data-hoffset="" 
                                 data-y="middle" 
                                 data-voffset="['-30','-30','-30','-30']" 
                                 data-responsive_offset="on" 
                                 data-fontsize="['60','50','40','30']" 
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap" 
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;"><?php echo $slider['3'];?>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center" 
                                 data-hoffset="" 
                                 data-y="middle" 
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']" 
                                 data-lineheight="['16', '16', '14', '12']" 
                                 data-whitespace="nowrap" 
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                 data-start="3000" 
                                 data-splitin="chars" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive="off" 
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;"><?php echo $slider['4'];?>
                            </div>   
                        </li>
                        
                        <!-- SLIDE NR. 3 -->
                        <li data-transition="fade" 
                            data-slotamount="7"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="1000">
                            <!-- MAIN IMAGE -->
                            <img src="images/jardin_1.jpg" 
                                 alt="Image" 
                                 title="slider_bg1-3"
                                 data-bgposition="center center"
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat" 
                                 data-bgparallax="10" 
                                 class="rev-slidebg"
                                 data-no-retina="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme"
                                 data-x="center" 
                                 data-hoffset="" 
                                 data-y="middle" 
                                 data-voffset="['-30','-30','-30','-30']" 
                                 data-responsive_offset="on" 
                                 data-fontsize="['60','50','40','30']" 
                                 data-lineheight="['60','50','40','30']"
                                 data-whitespace="nowrap" 
                                 data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                 style="z-index: 5; color: #fff; font-weight: 900;"><?php echo $slider['5'];?>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme"
                                   data-x="['center','center','center','center']" 
                                 data-hoffset="" 
                                 data-y="['middle','middle','middle','middle']" 
                                 data-voffset="['45','45','45','45']"
                                 data-fontsize="['16', '16', '14', '12']" 
                                 data-lineheight="['16', '16', '14', '12']" 
                                 data-whitespace="nowrap" 
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                 data-start="3000" 
                                 data-splitin="chars" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive="off" 
                                 data-elementdelay="0.05"
                                 style="z-index: 9; font-weight: 400; color: rgba(255, 255, 255, 0.8); font-family: Raleway;"><?php echo $slider['6'];?>
                            </div>   
                        </li>
                        
                    </ul>
                </div>
            </div>
              <!-- ========== BOOKING FORM ========== -->
              <div class="hbf_2">
                <div class="container">
                    <div class="inner">
                        <form id="booking-form" method="post" action="bookin.php">
                            <div class="col-md-2 md_pr5">
                                <div class="form-group">
                                    <input name="email" type="text" id="email" value="" class="form-control" placeholder="<?php echo $bookin['1'];?>">
                                </div>
                            </div>
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="tipo" class="form-control" title="<?php echo $bookin['2']; ?>" data-header="<?php echo $habitaciones['1']; ?>">
                                            <option value="Single"><?php echo $habitaciones['2']; ?></option>
                                            <option value="Double"><?php echo $habitaciones['3']; ?></option>
                                            <option value="Deluxe"><?php echo $habitaciones['4']; ?></option>
                                            <option value="Double"><?php echo $habitaciones['5']; ?></option>
                                            <option value="Deluxe"><?php echo $habitaciones['6']; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 arrival_date md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="checkin" placeholder="<?php echo $bookin['3'];?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 departure_date md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="checkout" placeholder="<?php echo $bookin['4'];?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 adults md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <div class="form_select">
                                                <select name="adultos" class="form-control md_noborder_right" title="<?php echo $bookin['5'];?>:" data-header="<?php echo $bookin['5'];?>">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 children md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                            <div class="form_select childrens_select">
                                                <select name="niños" class="form-control dropup" title="<?php echo $bookin['6'];?>:" data-header="<?php echo $bookin['6'];?>">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 md_pl5">
                                <button type="submit" class="button  btn_blue btn_full" onclick="location.href='bookin.php'"><?php echo $menu['6']; ?>  </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== ROOMS ========== -->
        <section class="white_bg" id="rooms">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2><?php echo $rooms['1']; ?></h2>
                </div> 
                    <p class="main_description a_center">
                        <?php echo $rooms['2']; ?>
                    </p> 
                <div class="row">
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">56€ <span>/ <?php echo $noche;?></span></div>
                                <a class="hover_effect h_blue h_link" href="habitacion.php?tipo=individual">
                                    <img src="images/habitacion_1.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4>
                                        <a href="room.html">
                                            <?php echo $habitaciones['2'];?>
                                        </a>
                                    </h4>
                                    <span class="f_right">
                                        <a href="habitacion.php?tipo=individual" class="button btn_sm btn_blue">
                                        <?php echo $detalles;?>
                                        </a>
                                    </span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">68€<span>/ <?php echo $noche;?></span></div>
                                <a class="hover_effect h_blue h_link" href="habitacion.php?tipo=doble">
                                    <img src="images/habitacion_3.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4>
                                        <a href="habitacion.php?tipo=doble">
                                            <?php echo $habitaciones['3'];?>
                                        </a>
                                    </h4>
                                    <span class="f_right">
                                        <a href="habitacion.php?tipo=doble" class="button btn_sm btn_blue">
                                            <?php echo $detalles;?>
                                        </a>
                                    </span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="room">
                            <figure>
                                <div class="price">83€ <span>/ <?php echo $noche;?></span></div>
                                <a class="hover_effect h_blue h_link" href="habitacion.php?tipo=superior">
                                    <img src="images/habitacion_2.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4>
                                        <a href="habitacion.php?tipo=superior">
                                            <?php echo $habitaciones['3'];?>
                                        </a>
                                    </h4>
                                    <span class="f_right">
                                        <a href="room.html" class="button btn_sm btn_blue">
                                            <?php echo $detalles;?>
                                        </a>
                                    </span>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="mt40 a_center">
                    <a class="button btn_sm btn_yellow" href="elige_hab.php"><?php echo $rooms['3'];?></a>
                </div>
            </div>
        </section>

        <!-- ========== FEATURES ========== -->
        <section class="lightgrey_bg" id="features">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2><?php echo $features['1'];?></h2>
                </div>
                <p class="main_description a_center">
                   <?php echo $features['2'];?>
                </p>
                
                <div class="row">
                    <div class="col-md-7">
                        <div data-slider-id="features" id="features_slider" class="owl-carousel">
                            <div><img src="images/restaurante.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="images/monolito.jpg" class="img-responsive" alt="Image"></div>
                            <div><img src="images/turismo-enologico.jpg" class="img-responsive" alt="Image"></div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-thumbs" data-slider-id="features">
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-food"></i></span>
                                <div class="media-body">
                                    <h5><?php echo $features['3'];?></h5>
                                    <p><?php echo $features['4'];?></p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-person"></i></span>
                                <div class="media-body">
                                    <h5><?php echo $features['5'];?></h5>
                                    <p><?php echo $features['6'];?></p>
                                </div>
                            </div>
                            <div class="owl-thumb-item">
                                <span class="media-left"><i class="flaticon-business"></i></span>
                                <div class="media-body">
                                    <h5><?php echo $features['7'];?></h5>
                                    <p><?php echo $features['8'];?></p>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="mt40 a_center">
                        <a class="button btn_sm btn_yellow" href="banners.php"><?php echo $features['9'];?></a>
                    </div>
                </div>
            </div>
        </section>
     
        <!-- ========== ABOUT ========== -->
        <section id="about_style_2" class="blue_bg" >
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="about_img_1">
                                    <div class="about_img_inner">
                                        <img src="images/hosp1.jpg" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 about_img_2_col">
                                <div class="about_img_2">
                                    <div class="about_img_inner">
                                        <img src="images/hosp2.jpg" class="img-responsive" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="main_title mt_wave mt_white a_left">
                            <h2><?php echo $about['1'];?></h2>
                        </div>
                        <p class="main_description md_white">
                            <?php echo $about['2'];?>
                        <br><br>
                            <?php echo $about['3'];?>
                        </p>                                          
                </div>
            </div>
                
        </section>
        
        <!-- ========== TESTIMONIALS ========== -->
        <section id="testimonials" class="lightgrey_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main_title mt_wave a_left">
                            <h2><?php echo $opiniones['1'];?></h2>
                        </div>
                        <p class="main_description">
                           <?php echo $opiniones['2'];?>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <div id="testimonials_slider" class="owl-carousel">
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/persona.jpg" alt="Image">
                                <div class="review_content">
                                    <p><i>"Hotelito muy acogedor situado en un pequeño pueblo algo alejado pero suficientemente cerca de todo a la vez.
                                        El personal es encantador, muy amable y atento.
                                        Las camas son muy cómodas!!
                                        Cada vez que venimos por la zona repetimos!"</i>
                                    </p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Elia P. desde <a href="https://www.tripadvisor.es/ShowUserReviews-g1078800-d1047568-r672866541-Hospederia_de_Alesves-Villafranca_Navarra.html?m=19905">Trip Advisor</a></div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/cara.jpg" alt="Image">
                                <div class="review_content">
                                    <p><b><i>"Donde la paz y el sosiego se sienten.</b> La cena riquísima, con una música de fondo suave sin la estridencia del televisor un sitio para estar a gusto. Y descansar es una auténtica experiencia para los sentidos. El olor a madera en la habitación. Las vistas al amanecer. Sin duda alguna recomendable.</i></p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Luis desde <a href="https://www.booking.com/hotel/es/hospederia-de-alesves.es.html#tab-reviews">Booking</a></div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/cara2.jpg" alt="Image">
                                <div class="review_content">
                                    <p><i><b>"Lugar agradable y para descansar.</b> Edificio bonito ,con amplias y luminosas habitaciones. Personal agradable . Recomendable para todo el mundo!!!"</i></p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Pilar Hernan desde <a href="https://www.escapadarural.com/opiniones/hospederia-de-alesves/5412c8e78e20d">Escapada Rural</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- ========== CONTACT ========== -->
        <section class="white_bg" id="contact">
            <div class="container">
                <div class="main_title mt_wave mt_yellow a_center">
                    <h2><?php echo $contact['1'];?></h2>
                </div>
                <p class="main_description a_center">
                    <?php echo $contact['2'];?>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="embed-responsive-item">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1476.008799115618!2d-1.7498762!3d42.2781477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5a66cbeca9a55f%3A0xa339c0ae8d943e1f!2sHospeder%C3%ADa%20de%20Alesves%20(Entre%20las%20Bardenas%20y%20los%20r%C3%ADos)!5e0!3m2!1ses!2ses!4v1580839915806!5m2!1ses!2ses" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">   
                        <?php if(isset($_GET['mail'])){?>
                            <h3><?php echo $form_mail['1'];?></h3>                       
                        <?php } else { ?>
                            <form name="contact-form" method="post" action="mail.php">                            
                                <div class="form-group">
                                    <input class="form-control" name="name_cl" placeholder="<?php echo $form_mail['2'];?>" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email_cl" type="email" placeholder="<?php echo $form_mail['3'];?>">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="msj" placeholder="<?php echo $form_mail['4'];?>"></textarea>
                                </div>
                                <button class="button btn_lg btn_blue btn_full upper" type="submit"><i class="fa fa-location-arrow"></i>
                                    <?php echo $form_mail['5'];?>
                                </button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
            
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
                                    <li><i class="fa fa-fax"></i> Fax: <a href="fax:948846182">(+34) 948 84 61 82</a></li>
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
                                 Copyright 2020 <a href="index.html">Hospedería de Alesves</a> <?php echo $derechos?>
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
    
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html> 