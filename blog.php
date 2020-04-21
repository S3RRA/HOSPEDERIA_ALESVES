<?php 
    require 'conexion.php';
    include 'idiomas/language.php';
    include 'header.php';
    
?>
        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg   ) center repeat;">
            <div class="container">
                <div class="inner">
                    <h1>Blog</h1>
                    <ol class="breadcrumb">
                        <li><a href="index.html"><?php echo $menu['2'];?></a></li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- =========== MAIN ========== -->
        <main class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <div class="main_title  a_left">
                        <h2><b>POSTS</b></h2><hr>
                    </div>
                    <?php 
                        $sql = "SELECT * FROM posts ORDER BY fecha DESC LIMIT 4";
                        $resultado = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($resultado)){
                            echo '
                                <!-- ITEM -->
                                <article class="blog_list">
                                    <figure>
                                    <center>
                                        <a href="post.php?id='.$row['ID'].'" class="hover_effect h_link h_blue">
                                            <img src="'.$row['imagen'].'" class="img-responsive" alt="Image">
                                        </a>
                                    </center>
                                    </figure>
                                    <div class="details">
                                        <h2><a href="post.php?id='.$row['ID'].'">'.$row['titulo'].'</a></h2>
                                        <div class="info">
                                            <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>'.$row['fecha'].'</a></span>
                                            <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                        </div>
                                        <p>'.$row['texto1'].'</p>
                                        <a class="button btn_blue " href="post.php?id='.$row['ID'].'"><i class="fa fa-angle-double-right"></i> Leer más </a>
                                    </div>
                                </article>';
                            }
                        ?>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <aside class="widget">
                                <h4>Últimos posts</h4>
                                <div class="latest_posts">                                
                        <?php 
                            $sql4 = "SELECT * FROM posts";
                            $resultado4 = mysqli_query($con,$sql4);
                            while($row = mysqli_fetch_assoc($resultado4)){
                            echo    '<!-- ITEM -->
                                    <article class="latest_post">
                                        <figure>
                                            <a href="post.php?id='.$row['ID'].'" class="hover_effect h_link h_blue">
                                                <img src="'.$row['imagen'].'" width="120" height="62" alt="Image">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h6><a href="post.php?id='.$row['ID'].'">'.$row['titulo'].'</a></h6>
                                            <span><i class="fa fa-calendar"></i>'.$row['fecha'].'</span>
                                        </div>
                                    </article>';
                            }
                        ?>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4>ARCHIVO</h4>
                                <ul class="archive">
                                    <li><a href="blog.php?archivo=2020-05">Mayo 2020<span class="num_posts">21</span></a></li>
                                    <li><a href="blog.php?archivo=2020-06">Junio 2020<span class="num_posts">24</span></a></li>
                                    <li><a href="blog.php?archivo=2020-07">Julio 2020<span class="num_posts">38</span></a></li>
                                    <li><a href="blog.php?archivo=2020-08">Agosto 2020<span class="num_posts">11</span></a></li>
                                </ul>
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