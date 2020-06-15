<?php
    session_start();
    require './idiomas/language.php'; 
    include 'conexion.php';
    include 'header.php';
?>     
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
                        <form method="post" action="puente_bookin.php">
                            <div class="col-md-2 md_pr5">
                                <div class="form-group">
                                    <input name="email" type="text" id="email" class="form-control" placeholder="<?php echo $bookin['1'];?>">
                                </div>
                            </div>
                            <div class="col-md-2 md_p5">
                                <div class="form-group">
                                    <div class="form_select">
                                        <select name="tipo" class="form-control" title="<?php echo $bookin['2']; ?>" data-header="<?php echo $habitaciones['1']; ?>">
                                            <option value="doble"><?php echo $habitaciones['2']; ?></option>
                                            <option value="doble"><?php echo $habitaciones['3']; ?></option>
                                            <option value="triple"><?php echo $habitaciones['4']; ?></option>
                                            <option value="superior"><?php echo $habitaciones['5']; ?></option>
                                            <option value="familiar"><?php echo $habitaciones['6']; ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 arrival_date md_pl5 md_nopadding_right">
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control md_noborder_right" name="llegada" placeholder="<?php echo $bookin['3'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 departure_date md_pr5 md_nopadding_left">
                                        <div class="form-group">
                                            <div class="form_date departure">
                                                <input type="text" class="datepicker form-control" name="salida" placeholder="<?php echo $bookin['4'];?>">
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
                                                <input type="number" name="telefono" class="form-control md_noborder_right" placeholder="<?php echo $bookin['5'];?>:" data-header="<?php echo $bookin['5'];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form_select childrens_select">
                                                <input type="text" name="dni" class="form-control dropup" placeholder="<?php echo $bookin['6'];?>:" data-header="<?php echo $bookin['6'];?>">                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 md_pl5">
                                <input type="submit" class="button  btn_blue btn_full" placeholder="<?php echo $menu['6']; ?>">
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
                                <div class="price"><?php echo $precio_individual;?>€ <span>/ <?php echo $noche;?></span></div>
                                <a class="hover_effect h_blue h_link" href="habitacion.php?tipo=individual">
                                    <img src="images/habitacion_1.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4>
                                        <a href="habitacion.php?tipo=individual">
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
                                <div class="price"><?php echo $precios['doble'];?>€<span>/ <?php echo $noche;?></span></div>
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
                                <div class="price"><?php echo $precios['superior'];?>€ <span>/ <?php echo $noche;?></span></div>
                                <a class="hover_effect h_blue h_link" href="habitacion.php?tipo=superior">
                                    <img src="images/habitacion_2.jpg" class="img-responsive" alt="Image">
                                </a>
                                <figcaption>
                                    <h4>
                                        <a href="habitacion.php?tipo=superior">
                                            <?php echo $habitaciones['5'];?>
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
                                    <p><i>"<?php echo $comentario1; ?>"</i>
                                    </p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Elia P. <?php echo $comentario2;?> <a href="https://www.tripadvisor.es/ShowUserReviews-g1078800-d1047568-r672866541-Hospederia_de_Alesves-Villafranca_Navarra.html?m=19905">Trip Advisor</a></div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/cara.jpg" alt="Image">
                                <div class="review_content">
                                    <p><b><i>"<?php echo $comentario3;?>"</i></p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Luis <?php echo $comentario2;?> <a href="https://www.booking.com/hotel/es/hospederia-de-alesves.es.html#tab-reviews">Booking</a></div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <img src="images/cara2.jpg" alt="Image">
                                <div class="review_content">
                                    <p><i><b>"<?php echo $comentario4;?>"</i></p>
                                    <div class="review_rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="review_author">Pilar Hernan <?php echo $comentario2;?> <a href="https://www.escapadarural.com/opiniones/hospederia-de-alesves/5412c8e78e20d">Escapada Rural</a></div>
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
                        <div class="map-responsive">
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
        <?php include 'footer.php';?>
    
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