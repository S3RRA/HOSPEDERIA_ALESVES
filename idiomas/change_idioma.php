<?php
    session_start();
    if (isset($_GET["lan"])){
        $_SESSION["language"]=$_GET["lan"];
        header("Location:".$_SERVER['HTTP_REFERER']);
    }   
?>   

