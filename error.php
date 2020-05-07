<?php 
    require 'idiomas/language.php';
    include 'header.php';
?>
<main id="error404_page">

        <div class="container">
            <h1 class="error_number"> 404 </h1>
            <div class="main_title t_style3 a_center f_bold">
                <h2><?php echo $error['1'];?></h2>
            </div>
            <div class="text-center">
                <a href="index.php" class="button btn_sm btn_dark"><i class="fa fa-angle-left"></i><?php echo $error['2'];?></a> &nbsp; <?php echo $error['3'];?> &nbsp;
                <a href="contacto.php" class="button btn_sm btn_dark">&nbsp;<?php echo $error['4'];?><i class="fa fa-envelope-o"></i></a>
            </div>
        </div>

</main>
        <!-- ========== FOOTER ========== -->

<?php 
    include 'footer.php';
?>
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
