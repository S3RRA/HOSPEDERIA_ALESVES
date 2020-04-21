<?php

    $sql = "SELECT * FROM reservas WHERE (CURRENT_DATE >= llegada AND CURRENT_DATE <= salida) OR (CURRENT_DATE+1 = llegada) OR (CURRENT_DATE+2 = llegada) OR (CURRENT_DATE+3 = llegada) OR (CURRENT_DATE+4 = llegada) OR (CURRENT_DATE+5 = llegada) OR (CURRENT_DATE+6 = llegada) OR (CURRENT_DATE+7 = llegada)OR (CURRENT_DATE+8 = llegada )OR (CURRENT_DATE+9 = llegada)OR (CURRENT_DATE+10 = llegada) OR (CURRENT_DATE+11 = llegada)OR (CURRENT_DATE+12 = llegada)OR (CURRENT_DATE+13 = llegada)OR (CURRENT_DATE+14 = llegada)OR (CURRENT_DATE+15 = llegada)OR (CURRENT_DATE+16 = llegada)OR (CURRENT_DATE+17 = llegada)OR (CURRENT_DATE+18 = llegada)OR (CURRENT_DATE+19 = llegada)OR (CURRENT_DATE+20 = llegada)OR (CURRENT_DATE+21 = llegada)OR (CURRENT_DATE+22 = llegada)OR (CURRENT_DATE+23 = llegada)OR (CURRENT_DATE+24 = llegada)OR (CURRENT_DATE+25 = llegada)OR (CURRENT_DATE+26 = llegada)OR (CURRENT_DATE+27 = llegada)OR (CURRENT_DATE+28 = llegada)OR (CURRENT_DATE+29 = llegada)OR (CURRENT_DATE+30 = llegada)ORDER BY llegada ASC";
    $resultado = mysqli_query($con,$sql);
    $res = array();
    $res = $resultado->fetch_all(MYSQLI_ASSOC);

    $_COOKIE['json3'] = json_encode($res);

?>