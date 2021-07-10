<?php

require 'Modelo.Class.php';

class ModeloUsuario extends Modelo{
	public $IdUsuario;
	public $NombreUsuario;
	public $ApellidoUsuario;
	public $CorreoUsuario;
	public $ContrasenaUsuario;
	//public $FotoPerfil;


	public function CrearUsuario(){

		header("Location: paginaprincipal.html");

		$this -> ContrasenaUsuario = $this -> hashearPassword($this -> ContrasenaUsuario);
		$sql = "INSERT INTO usuarios(NombreUsuario,ApellidoUsuario,CorreoUsuario,ContrasenaUsuario) VALUES(
		'{$this -> NombreUsuario}',
		'{$this -> ApellidoUsuario}',
		'{$this -> CorreoUsuario}',
		'{$this -> ContrasenaUsuario}'
		)";
	    $this -> conexion -> query($sql);
			if($this -> conexion -> error){
			throw new Exception("error en la creacion del usuario");

			}
		}

	public function generarLogueo(){

		$sql = "SELECT IdUsuario FROM usuarios WHERE NombreUsuario =
		'{$this -> NombreUsuario}' and ContrasenaUsuario ='{$this -> ContrasenaUsuario}'";



		$existe = $this -> conexion -> query($sql);		
		$si=mysqli_num_rows($existe);

		if($si === 1){
			header("Location: paginaUsuarioLogueado.php");
			}else{
				echo "no existe el usuario";
			}
		}
	
	private function hashearPassword($ContrasenaUsuario){
    	return password_hash($ContrasenaUsuario,PASSWORD_DEFAULT);
    }

    private function compararPasswords($passwordHasheado){
            return password_verify($this -> password, $passwordHasheado);
}
}