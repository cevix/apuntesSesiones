
<?php 
//validacion.php
	if(isset($_POST['enviar'])){
		//Validar por codigo
		if($_POST['usuario']=="pepe@gmail.com" & $_POST['pass']=="123"){
			//Existe el susuario --> abrimos una sesion
			session_start();
			$_SESSION['usuario']=$_POST['usuario'];
			$_SESSION['logueado']=TRUE;//Me sirve para comprobar si la sesión sigue o está vigente
			$_SESSION['hora']=time();
			header("Location:archivo_protegido1.php");
		}else{
			header("Location:index_sesiones.php?mensaje=error");
		}

	}else{
		header("Location:index_sesiones.php");
	}

?>