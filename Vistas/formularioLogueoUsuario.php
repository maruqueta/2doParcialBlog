<?php 

require '../Controladores/ControladorUsuario.class.php';

	$intentoLogueo = ControladorUsuario::LogueoUsuario($_POST['NombreUsuario'],$_POST['ContrasenaUsuario']);