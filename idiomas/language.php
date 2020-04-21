<?php
    if(isset($_SESSION)){
        session_abort();
    }
    
    session_start();
    
    if (isset($_SESSION["language"])){
        $lan=$_SESSION["language"]; 
    }else{
        $lan="es";
    } 
        
    switch($lan):

        case "en":  
            include 'idiomas/en.php';
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

