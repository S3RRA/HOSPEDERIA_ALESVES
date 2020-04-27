<?php

    $sql = "SELECT * FROM comentarios_posts WHERE apto = 'no' ORDER BY POST_ID DESC";
    $resultado = mysqli_query($con,$sql);

    if(mysqli_num_rows($resultado)>0){        
        /*ENVIA DATOS*/
        $res = array();
        $res = $resultado->fetch_all(MYSQLI_ASSOC);

        $_COOKIE['json_comentarios'] = json_encode($res);        

    }else{
        echo 'NO HAY COMENTARIOS';
    }
    
?>