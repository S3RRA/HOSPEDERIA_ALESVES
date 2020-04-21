<?php
    require 'idiomas/language.php';
    require 'conexion.php';
    include 'header.php';
?>

        <?php 
            if($_GET['tipo']=='individual'){
                $precio=56;$img='images/habitacion_1.jpg';
                $precio2=$precios['doble'];$img2='images/habitacion_3.jpg';$tit2='Doble';$tipo2='?tipo=doble';
                $precio3=$precios['superior'];$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=$precios['triple'];$img4='images/habitacion_3.jpg';$tit4='Triple';$tipo4='?tipo=triple';
            }else if($_GET['tipo']=='doble'){
                $precio=$precios['doble'];$img='images/habitacion_3.jpg';
                $precio2=$precios['superior'];$img2='images/habitacion_2.jpg';$tit2='Superior';$tipo2='?tipo=superior';
                $precio3=$precios['triple'];$img3='images/habitacion_3.jpg';$tit3='Triple';$tipo3='?tipo=triple';
                $precio4=56;$img4='images/habitacion_1.jpg';$tit4='Individual';$tipo4='?tipo=individual';
            }else if($_GET['tipo']=='superior'){
                $precio=$precios[2];$img='images/habitacion_2.jpg';
                $precio2=$precios['triple'];$img2='images/habitacion_3.jpg';$tit2='Triple';$tipo2='?tipo=triple';
                $precio3=$precios['doble'];$img3='images/habitacion_3.jpg';$tit3='Doble';$tipo3='?tipo=doble';
                $precio4=56;$img4='images/habitacion_1.jpg';$tit4='Individual';$tipo4='?tipo=individual';
            }else if($_GET['tipo']=='triple'){
                $precio=$precios['triple'];$img='images/habitacion_3.jpg';
                $precio2=$precios['familiar'];$img2='images/habitacion_4.jpg';$tit2='Familiar';$tipo2='?tipo=familiar';
                $precio3=$precios['superior'];$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=$precios['doble'];$img4='images/habitacion_3.jpg';$tit4='Doble';$tipo4='?tipo=doble';
            }else if($_GET['tipo']=='familiar'){
                $precio=$precios['familiar'];$img='images/habitacion_4.jpg';
                $precio2=$precios['triple'];$img2='images/habitacion_3.jpg';$tit2='Triple';$tipo2='?tipo=triple';
                $precio3=$precios['superior'];$img3='images/habitacion_2.jpg';$tit3='Superior';$tipo3='?tipo=superior';
                $precio4=$precios['doble'];$img4='images/habitacion_3.jpg';$tit4='Doble';$tipo4='?tipo=doble';
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
                                <li><a href="index.php"><?php echo $inicio;?></a></li>
                                <li><a href="$alojamiento.php"><?php echo $alojamiento;?></a></li>
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
                                    <form  class="inner" method="post" action="puente_bookin.php">
                                        <div class="form-group">
                                            <input class="form-control" name="nombre" placeholder="Nombre:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="apellidos" placeholder="Apellidos:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="dni" placeholder="DNI:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="telefono" placeholder="Nº de teléfono:" type="text">
                                        </div>
                                        <div class="form-group">
                                            <div class="form_select">
                                                <select name="tipo" class="form-control" title="Selecione tipo de habitación:" data-header="Habitación:">
                                                    <option value="individual" <?php if($_GET['tipo']=='individual') echo'selected'; ?>><?php echo $habitaciones['2'];?></option>
                                                    <option value="doble" <?php if($_GET['tipo']=='doble') echo'selected'; ?>><?php echo $habitaciones['3'];?></option>
                                                    <option value="superior" <?php if($_GET['tipo']=='superior') echo'selected'; ?>><?php echo $habitaciones['4'];?></option>
                                                    <option value="triple" <?php if($_GET['tipo']=='triple') echo'selected'; ?>><?php echo $habitaciones['5'];?></option>
                                                    <option value="familiar" <?php if($_GET['tipo']=='familiar') echo'selected'; ?>><?php echo $habitaciones['6'];?></option>
                                                </select>
                                            </div>
                                        </div>                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control md_noborder_right" name="llegada" placeholder="<?php echo $f_llegada;?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
                                            <div class="input-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control" name="salida" placeholder="<?php echo $f_salida;?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <input class="button btn_lg btn_blue btn_full" type="submit">
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

</body>
</html>
