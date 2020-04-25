<?php
   require '../../conexion.php';
   error_reporting(E_ERROR);

   $fecha = $_GET['datos'];

   $sql = "SELECT * FROM reservas WHERE ('$fecha' BETWEEN salida AND llegada) OR (llegada = '$fecha') OR (salida = '$fecha')";
   $resultado = mysqli_query($con,$sql);

   if(mysqli_num_rows($resultado)>0){
      
      $ress = array();
      $ress = $resultado->fetch_all(MYSQLI_ASSOC);
      echo json_encode($ress);

   }else{

      echo "NO HAY RESERVAS";

   }
?>