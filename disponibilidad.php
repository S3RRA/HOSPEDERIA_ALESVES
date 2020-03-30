<?php
    require('./conexion.php');
    $sql = ('SELECT dni,llegada, salida FROM reservas');
    $resultado = mysqli_query($con, $sql) or die(mysqli_error($con));$i=1;
    while($res = mysqli_fetch_assoc($resultado)){
        echo 'RES '.$i.': dni:'.$res['dni'].'  llegada:'.$res['llegada'].'  salida:'.$res['salida'].'<br>';
        $i++;
    }
    
    echo'<br><br>';
    
    $sql = ('SELECT * FROM habitaciones');
    $resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
    while($res = mysqli_fetch_assoc($resultado)){
        echo 'HAB '.$res['numero'].'  tipo:'.$res['tipo'].'<br>';
        $i++;
    }
?>

