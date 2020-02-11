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
        $mail->Body    = '';           
        $mail->send();
        echo 'Message has been sent';
        header("Location: Login.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
        

?>

