
<?php

require '../Modelos/ModeloUsuario.Class.php';

class ControladorUsuario{

	public static function AltaUsuario($NombreUsuario,$ApellidoUsuario,$CorreoUsuario,$ContrasenaUsuario, $Usuario, $FotoPerfil)
	{
	try {
		$usuario = new ModeloUsuario();
		$usuario -> NombreUsuario = $NombreUsuario;
		$usuario -> ApellidoUsuario = $ApellidoUsuario;
		$usuario -> CorreoUsuario = $CorreoUsuario;
		$usuario -> ContrasenaUsuario = $ContrasenaUsuario;
		$usuario -> Usuario = $Usuario;
		$usuario -> FotoPerfil = $FotoPerfil;
		//$usuario -> CrearUsuario();
		return $usuario -> CrearUsuario();
	} catch (Exception $e) {
		return $e -> getMessage();
		}
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