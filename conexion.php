<?php
    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_DATABASE","hospederia");
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE) or die ("Ha ocurrido un error en la red, por favor póngase en contacto con nostros vía telefónica: (+34) 948 845 686");
?>