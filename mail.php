<?php
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
    if(isset($_POST['email_cl'])){
        $email_cl = $_POST['email_cl'];
    }else if(isset($_POST['email'])){
        $email_cl = $_POST['email'];
    }
    if(isset($_POST['name_cl'])){
        $name_cl = $_POST['name_cl'];
    }else if(isset($_POST['msj'])){
        $msj = $_POST['msj'];
    }else if(isset($_POST['message'])){
        $msj = $_POST['message'];
    }
    if(isset($_POST['phone'])&&isset($_POST['subject'])){
        $telf = $_POST['phone'];
        $asunto = $_POST['subject'];
        $mensaje = '<html>
                    <head></head>
                    <body>
                        Nombre cliente: '.$name_cl.'
                        <br>Asunto: '.$asunto.'
                        <br>E-mail cliente: '.$email_cl.'   
                        Teléfono: '.$telf.'<br><br>'.$msj.'
                    </body>
                    </html>';
    }
    $mensaje = '<html><head></head><body>Nombre cliente: '.$name_cl.'<br>E-mail cliente: '.$email_cl.'<br><br>'.$msj.'</body></html>';
    echo $mensaje;
    $email = $email_cl;
    try {   
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                        // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 's3rraclothing@gmail.com';                     // SMTP username
        $mail->Password   = 'Calamar77!';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('s3rraclothing@gmail.com','S3RRA');
        $mail->addAddress(''.'s3rra97@gmail.com'.'', ''.$user.'');     // Add a recipient


        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'MENSAJE - CONTACTO';       
        $mail->Body    = utf8_decode($mensaje);   
        $mail->AltBody = 'hola';
        $mail->send();
        echo 'Message has been sent';
        if($_GET['site']=='contacto'){
            header("Location: contacto.php?mail=enviado");
        }else{
            header("Location: index.php?mail=enviado#contact");            
        }
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        

?>

