<?php 
    require 'conexion.php';
    include 'idiomas/language.php';
    include 'header.php';   

    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE ID = $id";
    $resultado = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($resultado);

    $sql2 = "SELECT COUNT(POST_ID) FROM comentarios_posts WHERE POST_ID = $id AND apto = 'si'";
    $resultado2 = mysqli_query($con,$sql2);
    $res2 = mysqli_fetch_assoc($resultado2);
    $num_com = $res2['COUNT(POST_ID)'];

?>
  <!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg) center repeat;">
    <div class="container">
        <div class="inner">
            <h1>POSTS</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li>Blog</li>
                <li>Posts</li>
            </ol>
        </div>
    </div>
</div>
<!-- =========== MAIN ========== -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="blog_post">
                    <figure>
                        <a>
                            <center>
                                <img src="<?php echo $row['imagen'];?>" class="img-responsive" alt="Image">
                            </center>
                        </a>
                    </figure>
                    <div class="details">
                        <h2><a href="post.php?id=<?php echo $row['ID'];?>"><?php echo $row['titulo'];?></a></h2>
                        <div class="info">
                            <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i><?php echo $row['fecha'];?></a></span>
                            <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i><?php echo $num_com;?> Comentarios</a></span>
                        </div>
                        <p><?php echo $row['texto1'];?></p>
                        <blockquote>
                            <i class="fa fa-quote-left"></i>
                            <span class="quote_text"><?php echo $row['texto2'];?></span>

                        </blockquote>
                        <p><?php echo $row['texto3'];?></p>
                        <div class="meta_post">
                            <div class="tags">
                                <span><i class="fa fa-tags"></i>ETIQUETAS</span>
                                <a href="#" rel="tag"><?php echo $row['etiqueta1'];?></a>
                                <a href="#" rel="tag"><?php echo $row['etiqueta2'];?></a>
                                <a href="#" rel="tag"><?php echo $row['etiqueta3'];?></a>
                            </div>
                            <div class="share">
                                <span><i class="fa fa-share-alt"></i> SHARE</span>
                                <div class="social_media">
                                    <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a class="googleplus" href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php
                $sql2 = "SELECT * FROM comentarios_posts WHERE POST_ID = $id AND apto = 'si'";
                $resultado2 = mysqli_query($con,$sql2);
                if(mysqli_num_rows($resultado2)>0){
                    echo '<div class="comments">
                            <div class="main_title t_style3">
                                <h2>COMENTARIOS</h2>
                            </div>
                            <ol class="comments_list clearfix">';
                    while($row = mysqli_fetch_assoc($resultado2)){
                     echo '
                        <li class="comment single_comment">
                            <!-- Comment -->
                                <div class="comment-container comment-box">
                                    <a href="#" class="avatar">
                                        <img width="80" height="80" src="images/usuario_foto.png" alt="Image">
                                    </a>
                                    <div class="comment_content">
                                        <h4 class="author_name"><a href="#">'.$row['nombre'].'</a></h4>
                                        <span class="comment_info">
                                        <i class="fa fa-calendar"></i>
                                        <a href="#">
                                            <time>'.$row['fecha'].'</time>
                                        </a>
                                        </span>
                                        <div class="comment_said_text">
                                            <p>'.$row['contenido'].'</p>
                                        </div>
                                    </div>
                                </div>
                        </li>'; 
                    }
                }else{
                    echo '<div class="comments">
                                <div class="main_title t_style3">
                                    <h2>NO HAY COMENTARIOS</h2>
                                </div>';
                }
                ?>
                    </ol>
                <?php if(!isset($_GET['cmt'])){?>

                    <div class="main_title mt40">
                        <h2>AÑADIR COMENTARIO:</h2>
                    </div>
                    <div class="row">
                        <form id="comment-form" class="comment-form" method="post" action="puente_bookin.php?post_id=<?php echo $id;?>">
                            <div class="col-md-6">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required> </div>
                            <div class="col-md-6">
                                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required> </div>
                            <div class="col-md-12">
                                <textarea name="contenido" class="form-control" placeholder="Su comentario" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="button  btn_blue pull-right"><i class="fa fa-paper-plane-o"></i>Enviar</button>
                            </div>
                        </form>
                    </div>

                <?php }else{ ?>

                    <div class="main_title mt40">
                        <h2>SU COMENTARIO SE HA ENVIADO</h2><br><br>
                        <h3>LO PUBLICAREMOS EN CUANTO NOS SEA POSIBLE</h3><br>
                        <h4>MUCHAS GRACIAS POR PARITICPAR EN NUESTRO BLOG =)</h4>
                    </div>

                <?php } ?>

                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <aside class="widget">
                        <h4>ARCHIVO</h4>
                        <ul class="archive">
                            <li><a href="blog.php?archivo=2020-05">Mayo 2020<span class="num_posts">21</span></a></li>
                            <li><a href="blog.php?archivo=2020-06">Junio 2020<span class="num_posts">24</span></a></li>
                            <li><a href="blog.php?archivo=2020-07">Julio 2020<span class="num_posts">38</span></a></li>
                            <li><a href="blog.php?archivo=2020-08">Agosto 2020<span class="num_posts">11</span></a></li>
                        </ul>
                    </aside>
                    <aside class="widget">
                        <h4>Latest Posts</h4>
                        <div class="latest_posts">
                            <article class="latest_post">
                                <figure>
                                    <a href="blog-post.html" class="hover_effect h_link h_blue">
                                        <img src="images/blog/thumb1.jpg" alt="Image">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="blog-post.html">Live your myth in Greece</a></h6>
                                    <span><i class="fa fa-calendar"></i>23/11/2017</span>
                                </div>
                            </article>
                            <article class="latest_post">
                                <figure>
                                    <a href="blog-post.html" class="hover_effect h_link h_blue">
                                        <img src="images/blog/thumb2.jpg" alt="Image">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="blog-post.html">Hotel Zante in pictures</a></h6>
                                    <span><i class="fa fa-calendar"></i>18/10/2017</span>
                                </div>
                            </article>
                            <article class="latest_post">
                                <figure>
                                    <a href="blog-post.html" class="hover_effect h_link h_blue">
                                        <img src="images/blog/thumb3.jpg" alt="Image">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="blog-post.html">Hotel Zante family party</a></h6>
                                    <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                </div>
                            </article>
                            <article class="latest_post">
                                <figure>
                                    <a href="blog-post.html" class="hover_effect h_link h_blue">
                                        <img src="images/blog/thumb4.jpg" alt="Image">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="blog-post.html">Hotel Zante weddings</a></h6>
                                    <span><i class="fa fa-calendar"></i>13/08/2017</span>
                                </div>
                            </article>
                            <article class="latest_post">
                                <figure>
                                    <a href="blog-post.html" class="hover_effect h_link h_blue">
                                        <img src="images/blog/thumb5.jpg" alt="Image">
                                    </a>
                                </figure>
                                <div class="details">
                                    <h6><a href="blog-post.html">10 things you should know</a></h6>
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
<?php include 'footer.php';?>
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