<?php
    require '../../conexion.php';
       
    /*CAMBIA PRECIOS*/

    /*Por tipo*/
    if(isset($_GET['cambia'])&&$_GET['cambia']=='tipo'){
        
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        if($tipo == 'individual'){
            echo 'HOls';
            $sql_1 = "UPDATE habitaciones SET ind = $precio WHERE tipo = 'doble'";
            $res_1 = mysqli_query($con,$sql_1);
        }else{
            echo 'holS';
            $sql_1 = "UPDATE habitaciones SET precio = $precio WHERE tipo = '$tipo'";
            $res_1 = mysqli_query($con, $sql_1);
        }
        
        header("Location: ../workers.php?done=yes");
    }

    /*Por numero*/
    if(isset($_GET['cambia'])&&$_GET['cambia']=='numero'){
        $precio = $_POST['precio'];
        $numero = $_POST['numero'];
        
        $sql_1 = "UPDATE habitaciones SET precio = $precio WHERE numero = $numero";
        $res_1 = mysqli_query($con, $sql_1);
        
        header("Location: ../workers.php?done=yes");
    }

    /*CAMBIA DISPONIBILIDAD*/
    if(isset($_GET['cambia'])&&$_GET['cambia']=='disponibilidad'){
        $disponible = $_POST['disp'];
        
        $sql_1 = "SELECT disponible FROM habitaciones WHERE numero = $disponible";

        if($res_1 = mysqli_query($con, $sql_1)){

            while ($row = mysqli_fetch_assoc($res_1)){
                $disp = $row['disponible'];
            }    

            if($disp == 'si'){
                $sql_2 = "UPDATE habitaciones SET disponible = 'no' WHERE numero = $disponible";
                $res_2 = mysqli_query($con, $sql_2);
            }else{
                $sql_2 = "UPDATE habitaciones SET disponible = 'si' WHERE numero = $disponible";
                $res_2 = mysqli_query($con, $sql_2);
            }

        }

        header("Location: ../workers.php?done=yes");
    }
    /*AÑADIR POST*/
    if(isset($_GET['site'])&&$_GET['site']=='workers'){

        $titulo = $_POST['titulo'];
        $imagen = $_POST['imagen'];
        $t1 = $_POST['texto1'];
        $t2 = $_POST['texto2'];
        $t3 = $_POST['texto3'];
        $e1 = $_POST['et1'];
        $e2 = $_POST['et2'];
        $e3 = $_POST['et3'];

        $sql_1 = "INSERT INTO posts(titulo, imagen, fecha, texto1, texto2, texto3, etiqueta1, etiqueta2, etiqueta3) VALUES ('$titulo','$imagen',CURRENT_DATE,'$t1','$t2','$t3','$e1','$e2','$e3')";
        $res = mysqli_query($con,$sql_1);

        header('Location:../workers.php?done=yes') or die (mysqli_error($con));
    } 
    /*BORRAR POST*/
    if(isset($_GET['borra'])&&$_GET['borra']=='post'){

        $titulo = $_POST['post'];

        $sql = "DELETE FROM posts WHERE titulo = '$titulo'";
        $res = mysqli_query($con,$sql);

        header('Location:../workers.php?done=yes') or die(mysqli_error($con));
    }
    /*BORRAR COMENTARIO*/
    if(isset($_GET['borra'])&&$_GET['borra']=='comentario'){

        $post = $_POST['post'];
        $persona = $_POST['nombre'];

        $sql = "SELECT ID FROM posts WHERE titulo = '$post'";
        $res = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($res)){
            $POST_ID = $row['ID'];
        }    

        $sql = "DELETE FROM comentarios_posts WHERE POST_ID = $POST_ID AND nombre = '$persona'";
        $res = mysqli_query($con,$sql);

        header('Location:../workers.php?done=yes') or die(mysqli_error($con));

    }

?>

