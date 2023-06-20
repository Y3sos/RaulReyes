<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro de usuario</title>
  <link rel="stylesheet" href="style.css">
    <link rel="icon"  href="imagenes/logo.png">
  <body style="background-image: url('imagenes/logo.png'); background-repeat: no-repeat; background-size: cover;">

</head>
<body>
  <form class="register-form" action="registrousario.php" method="POST">
    <div class="container">
      <div class="register-box">
        <!-- Formulario de registro -->
        <h1>Registro de usuario</h1>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Registrarse</button>
      </div>
    </div>
  </form>
</body>
</html>
