<?php
    if(isset($_SESSION)){
      session_destroy();
      unset ($_SESSION['name']);
      unset ($_SESSION['id']);
    } 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area Trabajadores</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);
body{
  background: #0f2027; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #0f2027, #203a43, #2c5364); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #0f2027, #203a43, #2c5364); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  border-radius: 5px;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
imagen{
    position:absolute;
    right:10px;
    
}
        </style>
    <!-- LOGOTIPO -->
    <link rel="apple-touch-icon-precomposed" href="images/hospederia-de-alesves.gif" />
    <link rel="icon" href="../images/hospederia-de-alesves.gif">
    </head>
    <body>
        <div class="login-page">    
            <?php
                if(isset($_GET['error'])){
                    echo 'Contraseña o usuario incorrectos, por favor inténtelo de nuevo';
                }
            ?>
            <div class="form">
                <img src="../images/hospederia-de-alesves.gif" class="imagen">              
              <form class="login-form" method="post" action="puente_login.php">
                <input name="user" type="text" placeholder="Usuario"/>
                <input name="pass" type="password" placeholder="Contraseña"/>
                <button>Iniciar sesion</button>
              </form>
            </div>
        </div>
    </body>
</html>
