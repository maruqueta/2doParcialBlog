<?php 
	
	require '../Controladores/ControladorUsuario.class.php';

	$creado = ControladorUsuario::AltaUsuario($_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario']);
