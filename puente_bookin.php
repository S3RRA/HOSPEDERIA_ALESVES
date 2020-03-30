<?php
//error_reporting(E_ERROR);
require './conexion.php';
/*DECLARACION VARIABLES NECESARIAS*/
    //Variables obligatorias
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $apellidos = mysqli_real_escape_string($con,$_POST['apellidos']);    
    $telf = mysqli_real_escape_string($con,$_POST['telefono']);
    $tipo = mysqli_real_escape_string($con,$_POST['tipo']);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    $adultos = mysqli_real_escape_string($con,$_POST['adultos']);
    $llegada = $_POST['llegada'];
    $salida = $_POST['salida'];
    //Variables opcionales
    if(isset($_POST['cena'])){
        $cena="Si";        
    }else{
        $cena="No";        
    }
    if(isset($_POST['desayuno'])){
        $desayuno='Si';        
    }else{
        $desayuno='No';
    }  
    if(isset($_POST['comentario'])){
        $comentario = mysqli_real_escape_string($con,$_POST['comentario']);
    }else{
        $comentario='No hay';       
    } 
    if(isset($_POST['email'])){
        $email = mysqli_real_escape_string($con,$_POST['email']);        
    }else{
        $email='NULL';
    }    
    if(isset($_POST['pais'])){
        $pais = mysqli_real_escape_string($con,$_POST['pais']);        
    }else{
        $pais='NULL';
    }
    if(isset($_POST['niños'])){        
        $ninos = (int)mysqli_real_escape_string($con,$_POST['niños']);
    }else{
        $ninos = (int)0;
    }
    if(isset($_POST['cuna'])){
        $cuna = (int)mysqli_real_escape_string($con,$_POST['cuna']);
    }else{
        $cuna = (int)0;
    }
    if(isset($_POST['supletoria'])){
        $supletoria = (int)mysqli_real_escape_string($con,$_POST['supletoria']);
    }else{
        $supletoria = (int)0;
    }
    /*Comprobacion variables*/
    if($con){echo 'CONEXION REALIZADA <br>';}
    foreach($_POST as $post => $contenido){
        echo $post.'='.$contenido.'<br>';
    }
    echo $salida;
    echo '<br>'.$llegada.'<br>';
    
    /*CASTEO DE LLEGADA Y SALIDA A TIPO DATE*/
    $llegadaa = date_create($llegada); $llegadacas = date_format($llegadaa, 'Y-m-d');
    $salidaa = date_create($salida); $salidacas = date_format($salidaa, 'Y-m-d');
    
    /*COMPRUEBA DISPONIBILIDAD*/    
    $sql = "SELECT hab,salida,llegada FROM habitaciones BETWEEN $llegadacas AND $salidacas";
    if($resu = mysqli_query($con, $sql)){ 
        while($row = mysqli_fetch_assoc($res)){
            $habNoDisp = $row['hab'];
        }    
        $sql = "SELECT numero FROM habitaciones WHERE tipo = '$tipo' AND disponible = 'si' LIMIT 1";
        if($res = mysqli_query($con, $sql)){
            while ($row = mysqli_fetch_assoc($res)){
                global $num;
                $num = $row['numero']; 
                echo $num.'<br>';
            }
        }
    }
    if($num!==null){
        
    /*INSCRIPCION RESERVA EN BBDD*/
        $sql = "INSERT INTO reservas(llegada, salida, tipo_habitacion, desayuno, cena, adultos, dni, ninos, supletoria, cuna, comentarios, hab)"
               . " VALUES ('$llegadacas','$salidacas','$tipo','$desayuno','$cena',$adultos,'$dni',$ninos,$supletoria,$cuna,'$comentario', $num)";
        $resultado = mysqli_query($con, $sql) or die (mysqli_error($con)); 
        
        /*COMPRUEBA SI YA HA VENIDO CLIENTE*/
        $DNIexiste = "SELECT dni FROM clientes WHERE dni = '$dni'";
        $DNIexisteRes = mysqli_query($con,$DNIexiste) or die (mysqli_error($con));
        if(mysqli_num_rows($DNIexisteRes)==0){
            $sql2 = "INSERT INTO clientes (dni, nombre, apellidos, telefono, email, pais, NumeroVisitas)"
                     ."VALUES ('$dni', '$nombre', '$apellidos', '$telf', '$email', '$pais', 1)";
            $resultado2 = mysqli_query($con, $sql2) or die (mysqli_error($con));
        }else{
            $sql3 = "UPDATE clientes SET NumeroVisitas = NumeroVisitas+1 WHERE dni = '$dni'";
            $resultado3 = mysqli_query($con, $sql3) or die (mysqli_error($con));
        }
        /*ACTUALIZA DISPONIBILIDAD*/
       /* $sql4 = "UPDATE habitaciones SET disponible = 'no' WHERE numero = $num";
        $resultado4 = mysqli_query($con,$sql4) or die (mysqli_error($con)); */      
        //header("Location: bookin.php?booked=yes");        
    }else{
        //header("Location: bookin.php?disponibilidad=no");
    }
    
/*MAIL VERIFICACION*/
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './mail/Exception.php';
    require './mail/PHPMailer.php';
    require './mail/SMTP.php';
    error_reporting(E_ERROR);
    session_start();

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                        // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 's3rraclothing@gmail.com';                     // SMTP username
        $mail->Password   = 's3rras3rra';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('s3rraclothing@gmail.com','S3RRA');
        $mail->addAddress(''.$email.'', ''.$nombre.'');     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reserva - HOSPEDERÍA DE ALESVES';
        $mail->Body    = 'Reserva realizada, muchas gracias para mas informacion pongase en contacto con nostros via email o telefonicamente, muchas gracias.';           
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>

