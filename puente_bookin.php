<?php
/*MAIL VERIFICACION*/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './mail/Exception.php';
require './mail/PHPMailer.php';
require './mail/SMTP.php';
              
//error_reporting(E_ERROR);
require './conexion.php';
/*POSTS*/
    if(isset($_GET['post_id'])){
        $id = $_GET['post_id'];
        $nombre = $_POST['nombre'];
        $nombre .= ' '.$_POST['apellidos'];
        $contenido = $_POST['contenido'];
        
        $sql = "INSERT INTO comentarios_posts (POST_ID, nombre, fecha, contenido, apto) VALUES ($id,'$nombre',CURRENT_DATE(),'$contenido','no')";
        $res = mysqli_query($con, $sql) or die (mysqli_error($con));

        header("Location:post.php?id=$id&cmt=env");

    }else{

    /*DECLARACION VARIABLES NECESARIAS*/
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
        //Variables obligatorias
        if(isset($_POST['nombre'])){
            $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
        }else{
            $nombre = 'NULL';
        }
        if(isset($_POST['apellidos'])){
            $apellidos = mysqli_real_escape_string($con,$_POST['apellidos']);
        }else{
            $apellidos = 'NULL';
        }
        $telf = mysqli_real_escape_string($con,$_POST['telefono']);
        $tipo = mysqli_real_escape_string($con,$_POST['tipo']);
        $dni = mysqli_real_escape_string($con,$_POST['dni']);
        if(isset($_POST['adultos'])){
            $adultos = mysqli_real_escape_string($con,$_POST['adultos']);
        }else{
            $adultos = 1;
        
            /*
            switch($tipo):
                case 'individual':
                    if(isset($_POST['supletoria'])){
                        $adultos = 1+$supletoria;
                    }else{
                        $adultos = 1;
                    }
                break;
                case 'doble':
                    if(isset($_POST['supletoria'])){
                        $adultos = 2+$supletoria;
                    }else{
                        $supletoria = 2;
                    }
                break;
                case 'superior':
                    if(isset($_POST['supletoria'])){
                        $adultos = 2+$supletoria;
                    }else{
                        $adultos = 2;
                    }
                break;
                case 'triple':
                    if(isset($_POST['supletoria'])){
                        $adultos = 3+$supletoria;
                    }else{
                        $adultos = 3;
                    }
                break;
                case 'familiar':
                    if(isset($_POST['supletoria'])){
                        $adultos = 4+$supletoria;
                    }else{
                        $adultos = 4;
                    }
                break;
            default :
                $adultos = 0;
            endswitch;
            */
        }
        $llegada = $_POST['llegada'];
        $salida = $_POST['salida'];
        
        /*Comprobacion variables*/
        if($con){echo 'CONEXION REALIZADA <br>';}
        foreach($_POST as $post => $contenido){
            echo $post.'='.$contenido.'<br>';
        }
        /*HASH DE DATOS BANCARIOS*/
        if(isset($_POST['tarjeta'])){
            $tar = $_POST['tarjeta'];        
        }else{
            $tar = 'NULL';
        }
        if(isset($_POST['caducidad'])){
            $cad = $_POST['caducidad'];        
        }else{
            $cad = 'NULL';
        }
        
        /*CASTEO DE LLEGADA A TIPO DATE*/
        $llegadaa = str_replace("/","-",$llegada);
        $d = new DateTime($llegadaa);
        $timestamp = $d->getTimestamp();
        $llegada_cas = $d->format('Y-m-d');
        
        /*CASTEO DE SALIDA A TIPO DATE*/
        $salidaa = str_replace("/","-",$salida);
        $d = new DateTime($salidaa);
        $timestamp = $d->getTimestamp();
        $salida_cas = $d->format('Y-m-d');
        
        /*ALMACENAMOS TODOS LOS DÍAS ENTRE LAS DOS FECHAS SELECCIONADAS*/
        $estancia[] = "";
        for($i=$llegada_cas;$i<=$salida_cas;$i=("Y-m-d". strtotime($i."+1 days"))){
            echo $i.'<br>';
            $estancia = $i;
        }
        /*COMPRUEBA DISPONIBILIDAD*/ 
        $habNoDisp[]="";
        $sql = "SELECT hab,salida,llegada FROM reservas WHERE salida BETWEEN '$llegada_cas' AND '$salida_cas'";
        if($res = mysqli_query($con, $sql)){ 
            echo 'QUERY COMPRUEBA DISPONIBILIDAD: <br>';
            while($row = mysqli_fetch_assoc($res)){
                $habNoDisp[] = $row['hab'];
                echo $row['hab'].'<br>';
            }  
        }
        /*HABITACIONES ACTIVAS*/
        if($tipo == 'individual'){
            $sql = "SELECT numero FROM habitaciones WHERE tipo = 'doble' AND disponible = 'si'";
            if($res = mysqli_query($con, $sql)){
                while ($row = mysqli_fetch_assoc($res)){
                    global $num;
                    $num = $row['numero']; 
                    echo $num.'<br>';
                }
            }
        }
        $sql = "SELECT numero FROM habitaciones WHERE tipo = '$tipo' AND disponible = 'si'";
        if($res = mysqli_query($con, $sql)){
            echo 'QUERY HABITACIONES ACTIVAS: <br>';
            while ($row = mysqli_fetch_assoc($res)){
                global $num;
                $num = $row['numero']; 
                echo $num.'<br>';
            }
        }
        /*COMPARA DISPONIBILIDAD Y HABITACIONES*/
        if($num!==null&&!in_array($num, $habNoDisp)){
            
            /*INSCRIPCION RESERVA EN BBDD*/
            $sql = "INSERT INTO reservas(llegada, salida, tipo_habitacion, desayuno, cena, adultos, dni, ninos, supletoria, cuna, comentarios, hab)"
                . " VALUES ('$llegada_cas','$salida_cas','$tipo','$desayuno','$cena',$adultos,'$dni',$ninos,$supletoria,$cuna,'$comentario', $num)";
            $resultado = mysqli_query($con, $sql) or die (mysqli_error($con)); 
            
            /*COMPRUEBA SI YA HA VENIDO CLIENTE*/
            $DNIexiste = "SELECT dni FROM clientes WHERE dni = '$dni'";
            $DNIexisteRes = mysqli_query($con,$DNIexiste) or die (mysqli_error($con));
            if(mysqli_num_rows($DNIexisteRes)==0){
                $sql2 = "INSERT INTO clientes (dni, nombre, apellidos, telefono, email, pais, NumeroVisitas, tarjeta, caducidad)"
                        ."VALUES ('$dni', '$nombre', '$apellidos', '$telf', '$email', '$pais', 1, '$tar', '$cad')";
                $resultado2 = mysqli_query($con, $sql2) or die (mysqli_error($con));
            }else{
                $sql3 = "UPDATE clientes SET NumeroVisitas = NumeroVisitas+1 WHERE dni = '$dni'";
                $resultado3 = mysqli_query($con, $sql3) or die (mysqli_error($con));
            }
            if(isset($_GET['site'])&&$_GET['site']=='workers'){
                header("Location: workers/workers.php");
            }else if(isset($_POST['email'])){
                if ($nombre=='NULL') { $nombre = ''; }
                $mensaje = '<html>
                                <head></head>
                                <body>
                                    Gracias '.$nombre.' por realizar tu reserva con nosotros.<br>
                                    Te esperamos en la Hospedería de Alesves para tu estancia
                                        entre el '.$llegada.' y el '.$salida.' <br>
                                    Esperamos que tu estancia en tu habitación '.$tipo.' sea de tu agrado. <br>
                                    Si necesitas cualquier tipo de información no dudes en ponerte en contacto con nosotros.
                                </body>
                            </html>';
                echo $mensaje;
                try {   
                    $mail = new PHPMailer();
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
                    $mail->addAddress(''.$email.'', ''.$user.'');     // Add a recipient


                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    
                        $mail->Subject = 'Confirmacion Reserva - HOSPEDERIA DE ALESVES';
                    
                    $mail->Body    = utf8_decode($mensaje);   
                    $mail->AltBody = 'hola';
                    $mail->send();
                    echo 'Message has been sent';
                    header("Location: bookin.php?booked=yes");
                
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }                   
               
            }else{
                header("Location: bookin.php?booked=yes");
            }
        }else{
            if(isset($_GET['site'])&&$_GET['site']=='workers'){
                header("Location: workers/workers.php?error=yes");
            }else{
                header("Location: bookin.php?disponibilidad=no");
            }
        }
    }
    
?>

