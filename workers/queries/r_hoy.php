<?php

    $sql = "SELECT * FROM reservas WHERE CURRENT_DATE BETWEEN llegada AND salida OR (llegada = CURRENT_DATE) OR (salida = CURRENT_DATE)";
    $resultado = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)>0){
        $res = array();
        $res = $resultado->fetch_all(MYSQLI_ASSOC);

        $_COOKIE['json'] = json_encode($res);
    }

?>