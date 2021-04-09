<?php 

include("cone/cone.php");
session_start();

if($_POST){

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$seleccionar = "SELECT * FROM usuario WHERE usuario = '$usuario' and contraseña ='$contraseña'";
$query=mysqli_query($conex,$seleccionar);

if($usuario){
	echo '<script type="text/javascript">
        alert("Datos Actualizados");
        window.location.href="index.php";
        </script>';
        header('location:principal.php');
}
else{
	echo '<script type="text/javascript">
        alert("Datos arruinados");
        window.location.href="index.php";
        </script>';
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		.form-control{
			width: 40%;
		}
		.container{
			margin-top: 8%;

		}
	</style>
</head>
<body background="img/oka.jpg">
<form method="post">	
<div class="container bg-white text-black " >
	<center>
		<div class="form-group">
		</br>
			<img src="img/login.jpg">
		</div>
<div class="form-elemen">
<label class="form-label">Usuario</label>
<input class="form-control" type="text" name="usuario" id="usuario" required>
</div>

<div class="form-group">
<label >contraseña</label>
<input class="form-control" type="password" name="contraseña" id="contraseña" required>
</div>

<div class="form-group">
	<input  type="submit" value="Iniciar sesion" class="btn btn-danger">
	<p align="right"><label class="form-label"><a href="http://localhost/tarea8/creando.php">Agregar un nuevo usuario</a></label></p>
</div>
</center>
</div>
</form>
</body>
</html>