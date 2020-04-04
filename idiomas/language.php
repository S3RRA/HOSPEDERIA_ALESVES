<?php
    
   
    
    if (isset($_SESSION["language"])){
        $lan=$_SESSION["language"]; 
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
        default :
            include 'idiomas/es.php';

    endswitch;

?>

