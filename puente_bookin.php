<?php
//error_reporting(E_ERROR);
require './conexion.php';
/*INSCRIPCION RESERVA EN BBDD*/
    if(isset($_POST['cena'])){$cena="Si";}else{$cena="No";}
    if(isset($_POST['desayuno'])){$desayuno='Si';}else{$desayuno='No';}  
    if(isset($_POST['comentario'])){
        $comentario = mysqli_real_escape_string($con,$_POST['comentario']);
    }else{$comentario='';} 
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $apellidos = mysqli_real_escape_string($con,$_POST['apellidos']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $telf = mysqli_real_escape_string($con,$_POST['telefono']);
    $tipo = mysqli_real_escape_string($con,$_POST['tipo']);
    $dni = mysqli_real_escape_string($con,$_POST['dni']);
    $adultos = mysqli_real_escape_string($con,$_POST['adultos']);
    $niños = mysqli_real_escape_string($con,$_POST['niños']);
    $pais = mysqli_real_escape_string($con,$_POST['pais']);
    $llegada = $_POST['llegada'];
    $salida = $_POST['salida'];
    $supletoria = $_POST['supletoria'];
    $cuna = $_POST['cuna'];
    if($con){echo 'CONEXION REALIZADA <br>';}
    foreach($_POST as $post => $contenido){
        echo $post.'='.$contenido.'<br>';
    }
    echo $salida;
    echo '<br>'.$llegada.'<br>';
    $sql = "INSERT INTO reservas(llegada, salida, tipo_habitacion, desayuno, cena, adultos, ninos, supletoria, cuna, comentarios)"
            . " VALUES ('$llegada','$salida','$tipo','$desayuno','$cena',$adultos,$niños,'$supletoria','$cuna','$comentario')";
    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con)); 
    $sql2 = "INSERT INTO clientes (dni, nombre, apellidos, telefono, email, pais)
             VALUES ('$dni','$nombre','$apellidos',$telf,'$email','$pais')";
    $resultado2 = mysqli_query($con, $sql2) or die (mysqli_error($con));
/*MAIL-VERIFICACIÓN*/
    $email_cl = $_POST['email_cl'];
    $nombre_cl = $_POST['name_cl'];
    $msj = $_POST['msj'];
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
        $mail->addAddress(''.$email.'', ''.$user.'');     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reserva - HOSPEDERÍA DE ALESVES';
        $mail->Body    = 'Reserva realizada, muchas gracias para mas informacion pongase en contacto con nostros via email o telefonicamente, muchas gracias.';           
        $mail->send();
        echo 'Message has been sent';
        //header("Location: bookin.php?booked=yes");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    
?>

