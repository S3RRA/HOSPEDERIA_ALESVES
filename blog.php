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
                        if(isset($_GET['archivo'])){

                            $fecha = explode("-",$_GET['archivo']);
                            $anio = $fecha[0];
                            $mess = $fecha[1];

                            $sql = "SELECT * FROM posts WHERE YEAR(fecha) = $anio AND MONTH(fecha) = $mess ORDER BY fecha DESC";
                            $resultado = mysqli_query($con,$sql);

                        }else{
                            $sql = "SELECT * FROM posts ORDER BY fecha DESC LIMIT 4";
                            $resultado = mysqli_query($con,$sql);   
                        }
                        while($row = mysqli_fetch_assoc($resultado)){
                            
                            $id_post = $row['ID'];

                            $sql2 = "SELECT COUNT(POST_ID) FROM comentarios_posts WHERE POST_ID = $id_post AND apto = 'si'";
                            $resultado2 = mysqli_query($con,$sql2);
                            $res2 = mysqli_fetch_assoc($resultado2);

                            $num_com = $res2['COUNT(POST_ID)'];

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
                                            <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>'.$num_com.' comentarios</a></span>
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
                                <h4>Actividades</h4>
                                <div class="latest_posts">                                
                        <?php 
                            $sql4 = "SELECT * FROM posts ORDER BY fecha DESC LIMIT 4";
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
                                <?php 
                                    $sql3 = "SELECT DISTINCT MONTH(fecha) AS mes, YEAR(fecha) AS anio FROM posts ORDER BY fecha DESC";
                                    $res3 = mysqli_query($con,$sql3);
                                    while($row = mysqli_fetch_assoc($res3)){
                                        
                                        $month = $row['mes'];
                                        $year = $row['anio'];

                                        $sql4 = "SELECT COUNT(ID) AS num FROM posts WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year";
                                        $res4 = mysqli_query($con,$sql4);
                                        $ress4 = mysqli_fetch_assoc($res4);
                                        $num = $ress4['num'];

                                        switch($row['mes']){
                                            case 1:
                                                $mes = 'Enero';
                                            break;
                                            case 2:
                                                $mes = 'Febrero';
                                            break;
                                            case 3:
                                                $mes = 'Marzo';
                                            break;
                                            case 4:
                                                $mes = 'Abril';
                                            break;
                                            case 5:
                                                $mes = 'Mayo';
                                            break;
                                            case 6:
                                                $mes = 'Junio';
                                            break;
                                            case 7:
                                                $mes = 'Julio';
                                            break;
                                            case 8:
                                                $mes = 'Agosto';
                                            break;
                                            case 9:
                                                $mes = 'Septiembre';
                                            break;
                                            case 10:
                                                $mes = 'Octubre';
                                            break;
                                            case 11:
                                                $mes = 'Noviembre';
                                            break;
                                            case 12:
                                                $mes = 'Diciembre';
                                            break;
                                            default:
                                                $mes = 'Error, disculpe las molestias';
                                        break;
                                        }
                                        echo '<li><a href="blog.php?archivo='.$year.'-'.$month.'">'.$mes.' '.$row['anio'].'<span class="num_posts">'.$num.'</span></a></li>';
                                    }
                                ?>                                
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