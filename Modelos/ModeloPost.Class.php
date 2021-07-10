<?php

require 'Modelo.class.php';

class ModeloPost extends Modelo{
	//public $NombreUsuario;
	public $IdPost;
	public $IdAutor;
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

	public function ListarPost(){
		#ejm1
		
		#$sql = "SELECT TituloPost,CuerpoPost FROM posteo";
		#return $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
		
		#ejm2
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);


	// foreach ($fila){
			//$p = new ModeloPost();
			//$p -> TituloPost = $fila['TituloPost'];
			//$p -> CuerpoPost = $fila['CuerpoPost'];
			//array_push($fila, $p);
	//		}
			return $fila;
		}

		public function ModificarPersona(){
			$sql = "UPDATE persona set
			nombre = {$this -> nombre}',
			apellido = '{$this -> apellido}',
			edad = '{$this -> edad}',
			email = '{$this -> email}
			WHERE nombre = $this -> nombre)";
			$this -> conexion -> query($sql);
			
		}

		public function EliminarPersona(){

			$sql = "DELETE FROM persona where nombre = '($this -> nombre)'";
			$this -> conexion -> query($sql);
			
		}
	}
