<?php

require './conexion.php';

    $user = mysqli_real_escape_string($_POST['user']);
    $pass = mysqli_real_escape_string($_POST['pass']);
    
    $sql = "SELECT user, password FROM usuarios WHERE user = '$user' AND password = '$pass'";
    $res = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($res)>0){
        $fila = $res->fetch_array(MYSQLI_ASSOC);
        $_SESSION['username']=$user;
        header('Location:index.php');
    }else{
        header('Location:login.php?error=yes');
    }
?>

