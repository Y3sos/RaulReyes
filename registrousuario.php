<?php
include("conexion.php");
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$password = md5($_POST['password']);
$base_de_datos= "INSERT INTO usuario ($nombre, $apellido, $correo, $password);
	VALUES ('$nombre','$apellido','$correo','$password')";

if (mysqli_query($conexion, $base_de_datos)) {
echo '<script>alert("Usuario Agregado Con exito!"); window.location.href="index.php";</script>';

}else{

echo "Error: ". $insertar_usuario. "<br/>".mysqli_error($conexion);

}

//Cerrando la conexion 
mysqli_close($conexion);
?>

?>
