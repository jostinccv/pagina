
<?php 

include("cone/cone.php");

if($_POST){

	$usuario = $_POST['usuario'];
	$Contraseña = $_POST['Contraseña'];
	$insertar = "INSERT INTO usuario VALUES ('$usuario','$Contraseña')";
	$query = mysqli_query($conex, $insertar);

	if($query){
		echo '<script type="text/javascript">
	        alert("Datos Actualizados");
	        window.location.href="index.php";
	        </script>';

	        header('location:principal.php');
		}

	else{
		echo '<script type="text/javascript">
	        alert("No se puedo registrar sus datos");
	        window.location.href="index.php";
	        </script>';
		}

}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Crear usuario</title>
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
	<div class="container  bg-white text-black">
		<hr/>
		<center>
			<div class="form-group">
			<img src="img/icono.jpg">
			</div>
		<div class="form-group">
			<label class="form-label">Nombre de Usuario</label>
			<input type="text" name="usuario" id="usuario" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="form-label">Nueva Contraseña</label>
			<input type="password" name="Contraseña" id="Contraseña" class="form-control" required>
		</div>
		<input type="submit" value="Registrar" class="btn btn-danger">
		<p align="right"><label class="form-label"><a href="http://localhost/tarea8/">Regresar al login</a></label></p>
		</center>
	</div>
</form>
</body>
</html>