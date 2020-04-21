<?php    
    require './idiomas/language.php';

    if(isset($_GET['act'])){
        if(isset($_SESSION['actividad'])){
            unset($_SESSION['actividad']);
        }
        $_SESSION['actividad'] = $_GET['act'];
    }
    include 'header.php';
?>
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="<?php echo $imagen_fondo;?>">
            <div class="container">
                <div class="inner">
                    <h1><?php echo $actividad;?></h1>
                    <ol class="breadcrumb">
                        <li><a href="banners.php"><?php echo $actividades;?></a></li>
                        <li><?php echo $actividad;?></li>
                    </ol>
                </div>
            </div>
        </div>
    
        <!-- =========== MAIN ========== -->
        <main>
            <div class="container">
                <img src="<?php echo $f1;?>" class="img-responsive br2 mb20" alt="Image">
                <p>
                    <?php echo $p1;?>
                </p>
                <p>
                    <?php echo $p2;?>
                </p>
                <div class="row image-gallery">
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-6 mt20 mb20">
                        <a href="images/places.jpg">
                            <img src="<?php echo $fotos['1'];?>" class="img-responsive full_width br2" height="50" alt="Image">
                        </a>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-6 mt20 mb20">
                        <a href="images/places/place5.jpg">
                            <img src="<?php echo $fotos['2'];?>" class="img-responsive full_width br2" height="50" alt="Image">
                        </a>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-6 mt20 mb20">
                        <a href="images/places/place3.jpg">
                            <img src="<?php echo $fotos['3'];?>" class="img-responsive full_width br2" height="50" alt="Image">
                        </a>
                    </div>
                    <!-- ITEM -->
                    <div class="col-md-3 col-sm-6 mt20 mb20">
                        <a href="images/places/place4.jpg">
                            <img src="<?php echo $fotos['4'];?>" class="img-responsive full_width br2" height="50" alt="Image">
                        </a>
                    </div>
                </div>
                <p>
                    <?php echo $p3;?>
                </p>    
                <blockquote>
                    <i class="fa fa-quote-left"></i>
                    <span class="quote_text">  
                        <?php echo $p4;?>
                    </span>
                </blockquote>
                <p>
                    <?php echo $p5;?>
                </p>
                <p>
                    <?php echo $p6;?>
                </p>
            </div>
        </main>

    <!-- ========== FOOTER ========== -->
    <?php include 'footer.php'?>

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
