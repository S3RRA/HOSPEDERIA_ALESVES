<?php

require '../conexion.php';

    $usuario = $_POST['user'];
    $password1 = $_POST['pass'];
    
    $stmt = $con->prepare('SELECT user, password FROM usuarios WHERE user = ?');
	$stmt->bind_param('s', $usuario);
	$stmt->execute();        
	$stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            if ($password1==$password) {
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $usuario;
                    header('Location: workers.php');
	} else if($usuario != '') {
            header('Location: login.php?error=pass');
	}
        } else if($usuario != ''){
            header('Location: login.php?error=user');
        }        
    $stmt->close();

?>

