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
	
		public function ActualizaUsuario(){
		if($this -> existeUsurario($this -> Usuario)){
			if (!$this -> ContrasenaUsuario==""){
			$password = $this -> hashearPassword($this -> ContrasenaUsuario);
			$sql = "update usuarios set NombreUsuario='{$this -> NombreUsuario}' ,
			ApellidoUsuario= '{$this -> ApellidoUsuario}',
			CorreoUsuario='{$this -> CorreoUsuario}',
			ContrasenaUsuario='{$password}',
			FotoPerfil = '{$this -> FotoPerfil}'
			where usuario = '{$this -> Usuario}'";
			;
			}else
			{
			$sql = "update usuarios set NombreUsuario='{$this -> NombreUsuario}' ,
			ApellidoUsuario= '{$this -> ApellidoUsuario}',
			CorreoUsuario='{$this -> CorreoUsuario}',
			FotoPerfil = '{$this -> FotoPerfil}'
			where usuario = '{$this -> Usuario}'";
				}
	    $this -> conexion -> query($sql);
			if($this -> conexion -> error){
					throw new Exception("error en la creacion del usuario");
					return false;
			}
			return true;
		}else{
				return false;
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
		$sql = "SELECT * FROM usuarios WHERE Usuario = '{$this -> Usuario}'";
		$password = $this -> ContrasenaUsuario;
		//$contador = 0;
		$usuario = array();
		$reg_usuario = array();
		$query = $this -> conexion -> query($sql);
		foreach ($query -> fetch_all(MYSQLI_ASSOC) as $usuario ){
			//$valor = password_verify($password, $usuario['ContrasenaUsuario']);
			//echo "valor: ". $valor;
			if (password_verify($password, $usuario['ContrasenaUsuario'])){
			//	$contador++;
				$reg_usuario = $usuario;
			}
		}
		
		return $reg_usuario;
		/*
		//echo "encontro ".$contador;
		if ($contador>0){
			//echo "encontró ".$contador;
			//return true;
			return $reg_usuario;
		}else{
			return false;
			}
			*/
		}
	
	private function hashearPassword($ContrasenaUsuario){
    	return password_hash($ContrasenaUsuario,PASSWORD_DEFAULT, array("cost"=>12));
    }
}