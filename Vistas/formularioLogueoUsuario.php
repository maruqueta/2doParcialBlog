<?php 

require '../Controladores/ControladorUsuario.class.php';

	$intentoLogueo = ControladorUsuario::LogueoUsuario($_POST['NombreUsuario'],$_POST['ContrasenaUsuario']);

	/*if(!($intentoLogueo)){
	echo "<script>alert('Usuario o contrasena incorrectos');window.history.back()</script>";
	}else(

		)*/
	if (empty($intentoLogueo))
	{
		echo "<script>alert('Usuario no existe o password errado');window.history.back()</script>";
	}else{
		session_start();
			$_SESSION["usuario"]=$_POST['NombreUsuario'];
			$_SESSION["idUsuario"] = $intentoLogueo['IdUsuario'];
			$_SESSION["NombreUsuario"]= $intentoLogueo['NombreUsuario'];
			$_SESSION["ApellidoUsuario"]= $intentoLogueo['ApellidoUsuario'];
			$_SESSION["CorreoUsuario"]= $intentoLogueo['CorreoUsuario'];
			$_SESSION["FotoPerfil"]= $intentoLogueo['FotoPerfil'];
		header("Location: paginaUsuarioLogueado.php");
	}
