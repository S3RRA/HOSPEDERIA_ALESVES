<?php
    require '../../conexion.php';
    error_reporting(E_ERROR);

    $sql = "SELECT * FROM comentarios_posts WHERE apto = 'no' ORDER BY POST_ID DESC";
    $resultado = mysqli_query($con,$sql);

    if(mysqli_num_rows($resultado)>0){  
        $contenido = ' { "comentarios":[ ';
        while($row = mysqli_fetch_assoc($resultado)){
            $contenido .= '{';
            $contenido .= '"POST_ID":"'.$row['POST_ID'].'",';
            $contenido .= '"nombre":"'.$row['nombre'].'",';
            $contenido .= '"fecha":"'.$row['fecha'].'",';
            $contenido .= '"contenido":"'.$row['contenido'].'",';
            $contenido .= '"id":"'.$row['ID'].'"';
            $contenido .= '},';
        }
        $contenido .= "]}";
        $parte1 = substr($contenido, 0,strlen($contenido)-3);
        $parte2 = substr($contenido,-2);
        $json = $parte1.$parte2;
        /*
        for($i=0;$i<strlen($json);$i++){
            echo $i .'='. $json[$i].'<br>';
            if($i == '}'){

            }
        }
        */
        echo $json;
    }
?>