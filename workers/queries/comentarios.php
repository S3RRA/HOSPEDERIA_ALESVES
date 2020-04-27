<?php
    require '../../conexion.php';
    error_reporting(E_ERROR);

    $sql = "SELECT * FROM comentarios_posts WHERE apto = 'no'";
    $resultado = mysqli_query($con,$sql);
    echo 'QUERY A REALIZAR: '.$sql;
    if(mysqli_num_rows($resultado)>0){
        $res = array();
        $res = $resultado->fetch_all(MYSQLI_ASSOC);
       
        $_COOKIE['json_comentarios'] = json_encode($res);

        echo $_COOKIE['json_comentarios'];

    }else{
        echo 'Hola';
    }
?>