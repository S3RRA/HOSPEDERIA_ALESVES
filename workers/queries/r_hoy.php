<?php

    $sql = "SELECT * FROM reservas WHERE CURRENT_DATE >= llegada AND CURRENT_DATE <= salida";
    $resultado = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)>0){
        $res = array();
        $res = $resultado->fetch_all(MYSQLI_ASSOC);

        $_COOKIE['json'] = json_encode($res);
    }

?>