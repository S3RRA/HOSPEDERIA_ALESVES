<?php
    require '../../conexion.php';
    error_reporting(E_ERROR);

    $sql = "SELECT * FROM comentarios_posts WHERE apto = 'no' ORDER BY POST_ID DESC";
    $resultado = mysqli_query($con,$sql);

    if(mysqli_num_rows($resultado)>0){  
        $contenido = ' { "comentarios":[ ';
        while($row = mysqli_fetch_assoc($resultado)){

            $id = $row['POST_ID'];
            $sql2 = "SELECT * FROM posts WHERE ID = $id";
            $resultado2 = mysqli_query($con,$sql2);
            while($row2 = mysqli_fetch_assoc($resultado2)){

                $contenido .= '{';
                $contenido .= '"POST_ID":"'.$row2['titulo'].'",';
                $contenido .= '"nombre":"'.$row['nombre'].'",';
                $contenido .= '"fecha":"'.$row['fecha'].'",';
                $contenido .= '"contenido":"'.$row['contenido'].'",';
                $contenido .= '"id":"'.$row['ID'].'"';
                $contenido .= '},'; 
            }
        }
        $contenido .= "]}";
        $parte1 = substr($contenido, 0,strlen($contenido)-3);
        $parte2 = substr($contenido,-2);
        $json = $parte1.$parte2;
        echo $json;
    }
?>