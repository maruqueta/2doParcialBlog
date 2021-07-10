<?php 

require '../Controladores/ControladorUsuario.class.php';

	$intentoLogueo = ControladorUsuario::LogueoUsuario($_POST['NombreUsuario'],$_POST['ContrasenaUsuario']);

	/*if(!($intentoLogueo)){
	echo "<script>alert('Usuario o contrasena incorrectos');window.history.back()</script>";
	}else(

		)*/