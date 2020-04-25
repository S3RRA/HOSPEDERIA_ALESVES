<?php
    require 'idiomas/language.php';
    include 'header.php';
?>

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
                        <form id="contact-form-page" method='post' action='mail.php'>
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label"><?php echo $form_mail['2'];?>:</label>
                                    <input type="text" class="form-control" name="name_cl" placeholder="<?php echo $form_mail['2'];?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label"><?php echo $phone;?>:</label>
                                    <input type="text" class="form-control" name="phone" placeholder="<?php echo $phone;?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label"><?php echo $form_mail['3'];?></label>
                                    <input type="email" class="form-control" name="email_cl" placeholder="<?php echo $form_mail['3'];?>">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <label class="control-label"><?php echo $asunto;?></label>
                                    <input type="text" class="form-control" name="subject" placeholder="<?php echo $asunto;?>">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <label class="control-label"><?php echo $form_mail['4'];?></label>
                                    <textarea class="form-control" name="msj" placeholder="<?php echo $form_mail['4'];?>"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <input class="button btn_lg btn_blue btn_full upper" type="submit">
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                    
                    <div class="col-md-4">
                        <div id="contact-page22">
                            <div class="map-responsive">
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
                                <a class="facebook" href="https://www.facebook.com/hospederiadealesves/"><i class="fa fa-facebook"></i></a>
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
