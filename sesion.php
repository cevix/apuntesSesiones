
<?php 
//sesion.php
	session_start();
	if(!$_SESSION['logueado']){
		//si entro por aqui quiere decir que la sesión no está vigente
		session_destroy();
		header("Location:index_sesiones.php");
	}

	//caducidad
	if($_SESSION['hora']+10<time()){
		session_destroy();
		header('Location:index_sesiones.php?mensaje=caducada');
	}

	//inactividad
	if(isset($_SESSION['timeout'])){
		$vida_sesion=time()-$_SESSION['timeout'];
		if($vida_sesion>20){
			//Se acabó por inactividad
			session_destroy();
			header('Location:index_sesiones.php?mensaje=inactividad');
		}
	}


	$_SESSION['timeout']=time();

 ?>