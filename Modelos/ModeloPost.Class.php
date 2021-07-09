<?php

require 'Modelo.class.php';

class ModeloPost extends Modelo{
	//public $NombreUsuario;
	public $TituloPost;
	public $CuerpoPost;
	private $horaPosteo;

	public function CrearPost(){
		$sql = "INSERT INTO posteo (TituloPost,CuerpoPost) VALUES (
		'{$this -> TituloPost}',
		'{$this -> CuerpoPost}'
		)";		
		$this -> conexion -> query($sql);

		header("Location: paginaUsuarioLogueado.html");

		if ($this -> conexion -> error) {
			throw new Exception("error en la creacion del posT");
		}
	}
	public function ModificarPost(){
		
	}

	public function EliminarPost(){

	}
}