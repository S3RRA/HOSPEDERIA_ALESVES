<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class=\"containe\">
    <img src=\"../images/hospederia-de-alesves.gif\">
    <form action=\"../puente_bookin.php?site=workers\" method=\"post\">
    <div class=\"row\"><div class=\"col-25\">
        <label for=\"fname\">Nombre:</label></div><div class=\"col-75\"><input type=\"text\" id=\"fname\" name=\"nombre\" placeholder=\"Indique nombre del cliente\"></div>
    </div>
    <div class=\"row\"><div class=\"col-25\">
        <label for=\"imagen\">Apellidos</label></div><div class=\"col-75\"><input type=\"text\" id=\"imagen\" name=\"apellidos\" placeholder=\"Indique ambos apellidos del cliente\"></div>
    </div>
    <div class=\"row\"><div class=\"col-25\">
        <label for=\"t1\">Nº teléfono</label></div><div class=\"col-75\"><input id=\"t1\" name=\"telefono\" placeholder=\"Indique nº de teléfono cliente\"></div>
    </div>
    <div class=\"row\"><div class=\"col-25\">
        <label for=\"subject\">DNI:</label></div><div class=\"col-75\"><input id=\"subject\" name=\"dni\" placeholder=\"Indique DNI cliente\"></div>
    </div>
    <div class=\"row\"><div class=\"col-25\"> 
        <label for=\"habitacion\">Indique tipo de habitación:</label></div><div class=\"col-75\"><select id=\"habitacion\" name=\"tipo\"><option value=\"individual\">Individual</option><option value=\"doble\">Doble</option><option value=\"superior\">Superior</option><option value=\"triple\">Triple</option><option value=\"familiar\">Familiar</option></select></div>
    </div>
    <div class=\"row\"><div class=\"col-25\"> 
        <label for=\"llegada\">Llegada:</label></div><div class=\"col-75\"><input type=\"date\" name=\"llegada\" id=\"llegada\"></div>
    </div>
    <div class=\"row\"><div class=\"col-25\"> 
        <label for=\"salida\">Salida:</label></div><div class=\"col-75\"><input type=\"date\" name=\"salida\" id=\"salida\"></div>
    </div>
</div>
</body>
</html>
