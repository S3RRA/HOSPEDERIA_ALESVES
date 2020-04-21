<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
    <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hospedería de Alesves</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/hospederia-de-alesves.gif" />
    <link rel="icon" href="images/hospederia-de-alesves.gif">

    <!-- ========== STYLESHEETS ========== --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="revolution/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="revolution/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/famfamfam-flags.css" rel="stylesheet" type="text/css">
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7cRaleway:400,500,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- ========== PRELOADER ========== -->
    <div id="loading">
        <div class="inner">
            <div class="loading_effect">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        <!-- ========== TOP MENU ========== -->
        <div class="top_menu">
            <div class="container">
                <div class="welcome_mssg hidden-xs">
                    <?php echo $welcome ?>
                </div>
                <ul class="top_menu_right">
                    <li><i class="fa fa-phone"></i><a href="tel:948845686"> (+34) 948 845 686</a></li>
                    <li class="email hidden-xxs"><i class="fa fa-envelope-o "></i> <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                    <li class="language-switcher">
                        <nav class="dropdown">
                            <?php echo $idioma['1'];?>
                            <ul class="dropdown-menu">
                                <li><?php echo $idioma['2']; ?></li>
                                <li><?php echo $idioma['3']; ?></li>                                
                                <li><?php echo $idioma['4']; ?></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== HEADER ========== -->
        <?php 
            $var = explode('/',$_SERVER['SCRIPT_NAME']);
            $var1 = array_pop($var);
        ?>
        <header <?php if($var1=='index.php'){ echo 'class="fixed transparent"';}?>>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            <?php if($var1!=='index.php'){?> 
                    <a class="navbar-brand" href="index.php" style="position: relative;top:-30px;">
                        <img src="images/hospederia-de-alesves.gif" height="74" alt="Logo">
                    </a>
                </div>
            <?php } ?>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1'];?></li>
                        <li class="simple_menu <?php if($var1=='index.php'){ echo 'class="active';}?>">
                            <a href="index.php"><?php echo $menu['2'];?></a>                            
                        </li>
                        <li class="simple_menu <?php if($var1=='elige_hab.php'||$var1=='habitacion.php'){ echo 'active';}?>">
                            <a href="elige_hab.php"><?php echo $menu['3'];?></a>                            
                        </li>
                        <li class="simple_menu <?php if($var1=='banners.php'){ echo 'active';}?>">
                            <a href="banners.php"><?php echo $menu['4'];?></a>                            
                        </li>
                        <li class="simple_menu <?php if($var1=='contacto.php'){echo 'active';}?>">
                            <a href="contacto.php"><?php echo $menu['5'];?></a>
                        </li>
                        <li class="simple_menu <?php if($var1=='blog.php'){ echo 'active';}?>">
                            <a href="blog.php"><?php echo $menu['7'];?></a>                            
                        </li>
                        <li class="menu_button">
                            <a href="bookin.php" class="button  btn_yellow">
                                <i class="fa fa-calendar"></i><?php echo $menu['6'];?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>