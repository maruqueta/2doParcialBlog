<?php

require 'Modelo.Class.php';

class ModeloUsuario extends Modelo{
	public $IdUsuario;
	public $NombreUsuario;
	public $ApellidoUsuario;
	public $CorreoUsuario;
	public $ContrasenaUsuario;
	public $FotoPerfil;

	public function CrearUsuario(){

		if($this -> existeUsurario($this -> Usuario)){
			return false;
		}else{
			$password = $this -> hashearPassword($this -> ContrasenaUsuario);
			$sql = "INSERT INTO usuarios(NombreUsuario,ApellidoUsuario,CorreoUsuario,ContrasenaUsuario, usuario, FotoPerfil ) VALUES(
			'{$this -> NombreUsuario}',
			'{$this -> ApellidoUsuario}',
			'{$this -> CorreoUsuario}',
			'{$password}',
			'{$this -> Usuario}',
			'{$this -> FotoPerfil}'
			)";
	    $this -> conexion -> query($sql);
			if($this -> conexion -> error){
				throw new Exception("error en la creacion del usuario");
				return false;
			}
			return true;
		}
	}
	
	private function existeUsurario($Usuario){
		
		$sql = "SELECT count(*) as contador FROM usuarios WHERE Usuario = '{$Usuario}'";
		$existe = $this -> conexion -> query($sql);
		
		foreach ($existe -> fetch_all(MYSQLI_ASSOC) as $contador ){
			if ($contador['contador']>0){
				return true;
			}else{
				return false;
			}
		}
 	}
  
	public function generarLogueo(){
		
		$sql = "SELECT * FROM usuarios WHERE NombreUsuario = '{$this -> NombreUsuario}'";
		$password = $this -> ContrasenaUsuario;
		$contador = 0;
		$usuario = array();
		$query = $this -> conexion -> query($sql);
		foreach ($query -> fetch_all(MYSQLI_ASSOC) as $usuario ){
			$valor = password_verify($password, $usuario['ContrasenaUsuario']);
			if (password_verify($password, $usuario['ContrasenaUsuario'])){
				$contador++;
			}
		}

		if ($contador>0){
			header("Location: paginaUsuarioLogueado.html");
		}else{
			echo "Usuario no existe o password errado";
			}
		}
	
	private function hashearPassword($ContrasenaUsuario){

    	return password_hash($ContrasenaUsuario,PASSWORD_DEFAULT);
    }
}