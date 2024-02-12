
<!DOCTYPE html>
<html lang='es'>
<head>
	<meta charset="utf-8">
	<meta name="viexport" content="width=device-with, initial-scale=1">
	<title>Login</title>
	<style>
		*{
			font-family: 'Calibri';
		}
		label{
			display: block;
			margin-top: 1em;
		}
		.botones{
			margin-top: 1rem;
		}
	</style>
</head>
<body>

	<h1>Validación de usuario (sesiones)</h1>




	<form name="sesiones" action="validacion.php" method="post" enctype="application/x-www-form-urlencoded">
		<label>Usuario:</label>
		<input type="text" name="usuario" autofocus required>
		
		<label>Contraseña:</label>
		<input type="password" name="pass" required>

		<div calss="botones">
			<input type="submit" name="enviar" value="Acceder">
			<input type="reset" name="borrar" value="Borrar">
		</div>
	</form>

	<?php
	
		if(isset($_GET['mensaje'])){
			if($_GET['mensaje']=='error'){
				echo "<h2>Credenciales incorrectas</h2>";
			}else if($_GET['mensaje']=='caducada'){
				echo "<h2>Sesion caducada por tiempo</h2>";
			}else if($_GET['mensaje']=='inactividad'){
				echo "<h2>Sesion caducada por inactividad</h2>";
			}
			
		}else{
			echo"<h2>Introduzca credenciales</h2>";
		}

	?>



</body>
</html>

<?php 
//index_sesiones.php


?>