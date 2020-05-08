<?php
    if(isset($_SESSION)){
        session_abort();
    }
    
    session_start();
    
    if (isset($_SESSION["act"])){
        $act=$_SESSION["act"]; 
    }
        
    switch($act):

        case "Olite":  
            header('Location:actividad');
        break;
        case "fr":
            include 'idiomas/fr.php';
        break;
        case "de":
            include 'idiomas/de.php';
        break;
        case "es":
            include 'idiomas/es.php';
        break;
        default :
            include 'idiomas/es.php';

    endswitch;

?>

