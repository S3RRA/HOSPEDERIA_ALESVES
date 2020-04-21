<?php

    $sql = "SELECT * FROM reservas WHERE (CURRENT_DATE >= llegada AND CURRENT_DATE <= salida) OR (CURRENT_DATE+1 = llegada) OR (CURRENT_DATE+2 = llegada) OR (CURRENT_DATE+3 = llegada) OR (CURRENT_DATE+4 = llegada) OR (CURRENT_DATE+5 = llegada) OR (CURRENT_DATE+6 = llegada) OR (CURRENT_DATE+7 = llegada) ORDER BY llegada ASC";
    $resultado = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultado)==0){

        echo 'NO HAY RESERVAS';
        
    }else{

        $ress = array();
        $ress = $resultado->fetch_all(MYSQLI_ASSOC);

        $_COOKIE['json2'] = json_encode($ress);
        
    }

?>