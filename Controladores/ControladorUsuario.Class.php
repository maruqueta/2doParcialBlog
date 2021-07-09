
<?php

require '../Modelos/ModeloUsuario.Class.php';

class ControladorUsuario{

	public static function AltaUsuario($NombreUsuario,$ApellidoUsuario,$CorreoUsuario,$ContrasenaUsuario)
	{
	try {
		$usuario = new ModeloUsuario();
		$usuario -> NombreUsuario = $NombreUsuario;
		$usuario -> ApellidoUsuario = $ApellidoUsuario;
		$usuario -> CorreoUsuario = $CorreoUsuario;
		$usuario -> ContrasenaUsuario = $ContrasenaUsuario;
	//	$usuario -> FotoPerfil = $FotoPerfil;
		$usuario -> CrearUsuario();
		return true;
	} catch (Exception $e) {
		return $e -> getMessage();
		}
	return false;

	}

	public static function LogueoUsuario($NombreUsuario,$ContrasenaUsuario)
	{
	try {
		$usuario = new ModeloUsuario();
		$usuario -> NombreUsuario = $NombreUsuario;
		$usuario -> ContrasenaUsuario = $ContrasenaUsuario;
		$usuario -> generarLogueo();
	} catch (Exception $e) {
				return $e -> getMessage();
		}
	return false;
	}


}