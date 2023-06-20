<?php
session_start();

$usuario1 = "Raul";
$contraseña1 = "raul123";


if($_POST['username']==$usuario1 && $_POST['password']==$contraseña1){
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $usuario1;
	header("Location: inicio.php");
}

else {
	echo "Usuario o contraseña incorrectos. Por favor intente nuevamente";
	echo "<script>
	         alert('Usuario o Contaseña incorrecta');
	         window.location = 'index.php';
	      </script>";
}

?>
