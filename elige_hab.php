<?php
    require 'idiomas/language.php';
    require './conexion.php';
    include 'header.php';
?>
        
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
                                <span class="room_price_number"><?php echo $precios['doble'];?>.00€</span>
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
                                <span class="room_price_number"><?php echo $precios['superior']?>.00€</span>
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
                                <span class="room_price_number"><?php echo $precios['triple']?>.00€</span>
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
                                <span class="room_price_number"><?php echo $precios['familiar']?>.00€</span>
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
        <?php include 'footer.php';?>

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