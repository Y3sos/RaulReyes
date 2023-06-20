<?php
include("conexion.php");
session_start();

$username = mysqli_real_escape_string($conexion, $_POST['email']);
$password = mysqli_real_escape_string($conexion, md5($_POST['password']));
$usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$username' AND password = '$password'");

if (mysqli_num_rows($usuario) == 1) {
  $usuario = mysqli_fetch_array($usuario);
  $_SESSION['email'] = $usuario['correo'];
  $_SESSION['password'] = $usuario['password'];
  $_SESSION['loggedin'] = true;
  header('Location:inicio.php');
} else {
  echo '<script>alert("Correo o Contraseña Incorrectos!"); window.location.href="index.php";</script>';
}

?>