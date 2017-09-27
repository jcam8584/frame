<?php 
include 'cn.php';
// Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO usuario(nombre, apellidos, email, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$email', '$usuario', '$clave',  '$telefono')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario' ");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
			alert("El usuario ya está registrado");
			window.history.go(-1);
		 </script>';
	exit;
}

$verificar_email = mysqli_query($conexion, "SELECT * FROM usuario WHERE email = '$email' ");
if (mysqli_num_rows($verificar_email) > 0){
	echo '<script>
			alert("El email ya registrado");
			window.history.go(-1);
		 </script>';
	exit;
}


$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
	echo '<script>
			alert("Error al registrarse");
			window.history.go(-1);
		 </script>';
}
else {
	echo '<script>
			alert("Usuario registrado exitosamente");
			window.history.go(-1);
		 </script>';
}

mysqli_close($conexion);

 ?>
