<?php 
    require './idiomas/language.php';
    include 'header.php';
?>
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay"  style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg   ) center repeat;">
            <div class="container">
                <div class="inner">
                    <h1><?php echo $descubre;?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><?php echo $inicio;?></a></li>
                        <li><?php echo $descubre;?></li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main id="places_page">
            <div class="container">
                <div class="row">
                    <div class="grid">
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Olite">
                                    <img src="images/olite.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Olite</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-6 col-sm-6 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Bardenas">
                                    <img src="images/monolito.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Bardenas Reales</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=fiestas">
                                    <img src="images/sanfermin1.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $fiestas;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Tudela">
                                    <img src="images/tudela.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Tudela</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=vino">
                                    <img src="images/turismo-enologico.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $features['7'];?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=senderismo">
                                    <img src="images/senderismo.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $senderismo;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=aves">
                                    <img src="images/observatorio_aves.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $aves;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3  col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=rios">
                                    <img src="images/soto.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Arga <?php echo $y;?> Aragón</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Pitillas">
                                    <img src="images/pitillas.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $laguna;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Moncayo">
                                    <img src="images/moncayo.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Moncayo</h2>
                                    </div>
                                </a>
                            </div>
                        </div>  
                        <!-- ITEM -->
                        <div class="col-md-6 col-sm-6 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Cister">
                                    <img src="images/cister.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $cister;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=BBT">
                                    <img src="images/bicicleta-segway.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $bici;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-6 col-sm-6 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=praguismo">
                                    <img src="images/piraguismo.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2><?php echo $rios;?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=Villafranca">
                                    <img src="images/Villafranca Navarra (14).JPG" alt="Image">
                                    <div class="place_name">
                                        <h2>Villafranca</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ITEM -->
                        <div class="col-md-3 col-sm-3 col-xs-12 g_item">
                            <div class="places_item">
                                <a href="actividad.php?act=SendaViva">
                                    <img src="images/sendaviva.jpg" alt="Image">
                                    <div class="place_name">
                                        <h2>Senda Viva</h2>
                                    </div>
                                </a>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class='help' style='text-align:center'>
                    <?php echo $banners_blog;?>                   
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
