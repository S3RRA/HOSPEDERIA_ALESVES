<?php
    require './idiomas/language.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- ========== SEO ========== -->
    <title>Hospedería de Alesves - Bookin</title>
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
    <div id="smoothpage" class="wrapper">
<?php 
    require './conexion.php';
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        setcookie('email',$email);
    }

?>
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
                                <li><?php echo $idioma['2'];?></li>
                                <li><?php echo $idioma['3']; ?></li>                                
                                <li><?php echo $idioma['4']; ?></li>
                            </ul>
                        </nav>
                    </li>
                </ul>
            </div>
        </div>
        <header class="fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>  
                    <a class="navbar-brand" href="index.php" style="position: relative;top:-30px;">
                        <img src="images/hospederia-de-alesves.gif" height="74" alt="Logo">
                    </a>
                </div>
                <nav id="main_menu" class="mobile_menu navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="mobile_menu_title" style="display:none;"><?php echo $menu['1'];?></li>
                        <li class="dropdown simple_menu">
                            <a href="index.php"><?php echo $menu[2];?></a>                            
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="elige_hab.php"><?php echo $menu['3'];?><b class="caret"></b></a>                            
                        </li>
                        <li class="dropdown simple_menu">
                            <a href="banners.php"><?php echo $menu['4'];?><b class="caret"></b></a>                            
                        </li>
                        <li><a href="contacto.php"><?php echo $menu['5'];?></a></li>
                        <li class="menu_button">
                            <a href="bookin.php" class="button  btn_yellow"><i class="fa fa-calendar"></i><?php echo $menu['6'];?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/hospederia.jpg)bottom right no-repeat,url(images/06_exterior.jpg) center no-repeat,url(images/jardin_1.jpg   ) center repeat;">
            <div class="container">
                <div class="inner">
                    <h1><?php echo $r_reserva;?></h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><?php echo $inicio?></a></li>
                        <li><?php echo $r_reserva;?></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- =========== MAIN ========== -->
        <main id="booking_page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="booking_advanced">
                    <?php
                    if(isset($_GET['booked'])&&$_GET['booked']='yes'){
                        echo '<div class="main_title a_left upper">
                                <h3>Su reserva se ha realizado con éxito.</h3> <p>Verifique su correo para más detalles.</p>
                            </div>
                        </div>';
                    }else if(isset($_GET['booked'])&&$_GET['booked']='yess'){
                        echo '<div class="main_title a_left upper">
                                <h3>Su reserva se ha realizado con éxito.</h3> <p>Póngase en contaco con nosotros para más detalles.</p>
                            </div>
                        </div>';
                    }else if(isset($_GET['disponibilidad'])){
                        echo '<div class="main_title a_left upper">
                                <h3>Lo sentimos.</h3> <p>Carecemos de disponibilidad del tipo de habitación elegida en las fechas seleccionadas.</p>
                                <p>Por favor, elija otras fechas u otro tipo de habitación.</p><br>
                                <p>Para más información póngase en contacto con nosotros:<br> vía mail: <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a><br> o telefónica: <a href="tel:948845686">(+34) 948 845 686</a></p>
                            </div>
                        </div>';
                    }else{
                        echo '
                            <div class="main_title a_left upper">
                                <h2>Reserva online</h2>
                            </div>';                    
                    ?>
                            <!-- ========== BOOKING FORM ========== -->
                            <div class="row">
                                
                                <form method="post" action="puente_bookin.php">
                                    <div class='com-md-12'>
                                        <div class='form-group'><?php echo $campos_obl['1'];?></div>
                                    </div><hr>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['1'];?></label>
                                            <input name="nombre" type="text" class="form-control" placeholder="<?php echo $campos_obl['2'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['2'];?></label>
                                            <input class="form-control" name="apellidos" type="text" placeholder="<?php echo $campos_obl['3'];?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['3'];?></label>
                                            <input class="form-control" name="dni" type="text" placeholder="<?php echo $campos_obl['4'];?>:" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <a href="#" title="<?php echo $campos_obl['5.1'];?>" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $campos_obl['5.2'];?>">
                                                    <i class="label_icon_info fa fa-info-circle"></i>
                                                </a>
                                            </label>
                                            <input class="form-control" name="tarjeta" type="text" placeholder="<?php echo $campos_obl['5.3'];?>" required><br>
                                            <input class="form-control" name="caducidad" type="text" placeholder="<?php echo $campos_obl['5.4'];?>" required>
                                        </div>
                                    </div> <br>             
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['5'];?></label>
                                            <input name="telefono" type="text" class="form-control" placeholder="<?php echo $campos_obl['6'];?>" required>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label></label>
                                            <div class="form_select">
                                                <select name="tipo" class="form-control" title="Tipo de habitación:" data-header="Tipo de habitación:">
                                                    <option value="individual" data-subtext="<span class='label label-info'>56€ / <?php echo $noche;?></span>" <?php if(isset($_GET['tipo'])=='individual'){echo 'selected';} ?>><?php echo $habitaciones['2'];?></option>
                                                    <option value="doble" data-subtext="<span class='label label-info'>68€ / <?php echo $noche;?></span>" <?php if(isset($_GET['tipo'])=='doble'){echo 'selected';} ?>><?php echo $habitaciones['3'];?></option>
                                                    <option value="superior" data-subtext="<span class='label label-info'>77€ / <?php echo $noche;?></span>" <?php if(isset($_GET['tipo'])=='superior'){echo 'selected';} ?>><?php echo $habitaciones['4'];?></option>
                                                    <option value="triple" data-subtext="<span class='label label-info'>86€ / <?php echo $noche;?></span>" <?php if(isset($_GET['tipo'])=='triple'){echo 'selected';} ?>><?php echo $habitaciones['5'];?></option>
                                                    <option value="familiar" data-subtext="<span class='label label-info'>118€ / <?php echo $noche;?></span>" <?php if(isset($_GET['tipo'])=='familiar'){echo 'selected';} ?>><?php echo $habitaciones['6'];?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    /*Cambiar a calendario mas wapo q hay muchos*/
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Llegada:
                                                <a href="#" title="Llegada" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Llegada a partir de las 11:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_date">
                                                <input type="datetime" class="datepicker form-control " name="llegada" placeholder="Fecha de llegada:" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salida:
                                                <a href="#" title="Salida" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Salida a partir de las 12:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_date">
                                                <input type="datetime" class="datepicker form-control" name="salida" placeholder="Fecha de salida:" readonly required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['7'];?>:<a href="#" title="<?php echo $obl_tit['7'];?>" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+ 6.50€"> <i class="label_icon_info fa fa-info-circle"></i></a></label>
                                            <input class="form-control" class="form-check-input" name="desayuno" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['8'];?>:<a href="#" title="<?php echo $obl_tit['8'];?>" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+ 6.50€"> <i class="label_icon_info fa fa-info-circle"></i></a></label>
                                            <input class="form-control" class="form-check-input" name="cena" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $obl_tit['9'];?>:
                                                <a href="#" title="<?php echo $obl_tit['9'];?>:" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+18 <?php echo $anios;?>"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="adultos" class="form-control" title="Adultos:" data-header="<?php echo $obl_tit['9'];?>:">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br>
                                </div>
                            <br><br>
                                <div class="row">
                                    <div class='com-md-12'>
                                        <div class='form-group'><?php echo $campos_op['1'];?></div>
                                    </div><hr>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['2'];?>:
                                                <a href="#" title="<?php echo $campos_op['2'];?>" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="<?php echo $campos_op;?>"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <input class="form-control" name="email" type="text" <?php if(isset($_POST['email'])){echo'value="'.$email.'" placeholder="'.$email.'"';}else echo 'placeholder="Indique su email:"';?>>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['4'];?>:</label>
                                            <div class="form_select">
                                                <select name="pais" class="form-control" title="<?php echo $campos_op['5'];?>" data-header="<?php echo $campos_op['5'];?>:" data-live-search="true" data-size="5">
                                                    <option value="Afganistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire">Bonaire</option>
                                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Channel Islands">Channel Islands</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Island">Cocos Island</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaco">Curacao</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North">Korea North</option>
                                                    <option value="Korea Sout">Korea South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Phillipines">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States of America">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br><br>
                                    
                                    <br><br><br><br>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['6'];?>:
                                                <a href="#" title="<?php echo $campos_op['6'];?>:" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="0-18 <?php echo $anios;?>"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="niños" class="form-control" title="<?php echo $campos_op['6'];?>:" data-header="<?php echo $campos_op['6'];?>:">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['7'];?>:
                                                <a href="#" title="<?php echo $campos_op['7'];?>:" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+20€"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="supletoria" class="form-control" title="<?php echo $campos_op['7'];?>:  " data-header="<?php echo $campos_op['7'];?>:">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['8'];?>:
                                                <a href="#" title="<?php echo $campos_op['8'];?>:" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+10€"> <i class="label_icon_info fa fa-info-circle"></i></a>
                                            </label>
                                            <div class="form_select">
                                                <select name="cuna" class="form-control" title="<?php echo $campos_op['8'];?>:" data-header="<?php echo $campos_op['8'];?>:">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><?php echo $campos_op['9'];?>:</label>
                                            <textarea class="form-control" name="comentario" placeholder="<?php echo $campos_op['10'];?>"></textarea>
                                        </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-11"></div>
                                    <div class="col-md-12">
                                        <br>
                                        <button type="submit" class="button btn_blue pull-right"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $r_hab;?> </button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    <?php } ?>
                    </div>                    
                    <div class="col-md-4">
                        <div class="special_offers">
                            <div class="main_title a_left upper">
                                <h2><?php echo $ofertas['1'];?>:</h2>
                            </div>
                            <article class="room mb40">
                                <figure>
                                    <a href="habitacion.php?tipo=trabajadores" class="hover_effect h_blue h_link">
                                        <img src="images/habitacion_1.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4><a href="habitacion.php?tipo=trabajadores"><?php echo $ofertas['2'];?>:</a></h4>
                                        <p><?php echo $ofertas['3'];?></p>
                                        <div class="price">75 €<span>/ <?php echo $noche;?></span></div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="room mb40">
                                <figure>
                                    <a href="habitacion.php?tipo=pareja" class="hover_effect h_blue h_link">
                                        <img src="images/habitacion_2.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h4><a href="habitacion.php?tipo=pareja"><?php echo $ofertas['4'];?>:</a></h4>
                                        <p><?php echo $ofertas['5'];?></p>
                                        <div class="price">190 €<span>/ <?php echo $noche;?></span></div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="room mb40">
                                <figure>
                                    <a href="habitacionn.php" class="hover_effect h_blue h_link">
                                        <img src="images/habitacion_3.jpg" class="img-responsive" alt="Image">
                                    </a>
                                    <figcaption>
                                        <h5><a href="habitacionn.php"><?php echo $ofertas['6'];?>:</a></h5><hr>
                                        <p><?php echo $ofertas['7'];?></p>
                                        <div class="price"><?php echo $desde;?> 62€<span>/ <?php echo $noche?></span></div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 widget">
                            <div class="about">
                                <a href="index.html"><img class="logo" src="images/hospederia-de-alesves.gif" height="80" alt="Logo"></a>
                                <?php echo $descr;?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $noticias;?></h5>
                            <ul class="blog_posts">
                                <li><a href="http://www.villafranca.es/">Villafranca</a> <small>Web <?php echo $ayuntamiento;?> Villafranca</small></li>
                                <li><a href="http://www.tudela.es/">Tudela</a> <small>Web <?php echo $ayuntamiento;?> Tudela</small></li>
                                <li><a href="http://www.olite.es/">Olite</a> <small>Web <?php echo $ayuntamiento;?> Olite</small></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $actividades;?></h5>
                            <ul class="useful_links">
                                <li><a href="http://www.lasbardenasreales.com/">Las Bardenas Reales</a></li>
                                <li><a href="https://www.olite.com.es/">Olite</a></li>
                                <li><a href="https://www.turismo.navarra.es/esp/home/">Turismo Navarra</a></li>
                                <li><a href="https://www.larutadelcister.info/es">Ruta del Císter</a></li>
                                <li><a href="https://www.sendaviva.com/">Senda Viva</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6 widget">
                            <h5><?php echo $contact_us;?></h5>
                            <address>
                                <ul class="address_details">
                                    <li><i class="glyphicon glyphicon-map-marker"></i>C/ bajo el arco, 34, 31330 Villafranca, Navarra</li>
                                    <li><i class="glyphicon glyphicon-phone-alt"></i> <?php echo $telefono;?>: <a href="tel:948845686">(+34) 948 84 56 86</a></li>
                                    <li><i class="fa fa-fax"></i> Fax: <a href="fax:948846182">(+34) 948 84 61 82</a></li>
                                    <li><i class="fa fa-envelope"></i> Email: <a href="mailto:info@hospederiadealesves.com">info@hospederiadealesves.com</a></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyrights">
                                 Copyright 2020 <a href="index.html">Hospedería de Alesves</a> <?php echo $derechos?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="social_media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

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
