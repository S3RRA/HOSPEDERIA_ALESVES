<?php
require '../../conexion.php';

foreach($_POST as $id => $valor){
    if($valor == 'validar'){
        $sql = "UPDATE `comentarios_posts` SET `apto`='si' WHERE id = '$id'";
        $res = mysqli_query($con,$sql);
    }elseif($valor == 'eliminar'){
        $sql = "DELETE FROM `comentarios_posts` WHERE id = '$id'";
        $res = mysqli_query($con,$sql);
    }
    header("Location: ../workers.php");
}

?>