<?php
    
    if (isset($_GET["lan"])){
        $_SESSION["language"]=$_GET["lan"];                
    }

    if (empty($_SESSION["language"])) {
        
        /*Toma idioma predeterminado del navegador*/
        $lan = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $_SESSION["language"]=$lan; 
        
        if ($lan!="es"){            
            $_SESSION["language"]="en";             
        }        
    }
    
    if (isset($_SESSION["language"])){
        $lan=$_SESSION["language"]; 
    }     
        
    switch($lan):

        case "es":
            include 'es.php';
            break;
        case "en":  
            include 'idiomas/en.php';
            break;
        case "fr":
            include 'idiomas/fr.php';
            break;
        case "de":
            include 'idiomas/de.php';
            break;

    endswitch;

?>

