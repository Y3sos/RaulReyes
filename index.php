<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon"  href="imagenes/logo.png">
</head>
<body>
    <div class="container">
  <div class="login-box">
    <!-- Formulario de inicio de sesión -->
    <form action="conexion.php" method="post">
      <h2>Inicio de Sesión</h2>
      <div class="input-container">
        <label for="username">Nombre de usuario</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="input-container">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
      </div>

      <input type="submit" value="Iniciar sesión">
    </form>

    <!-- Enlace al formulario de registro -->
    <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
  </div>

  <div class="background-image"></div>
</div>
