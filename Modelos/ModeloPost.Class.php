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

		header("Location: paginaUsuarioLogueado.php");

		if ($this -> conexion -> error) {
			throw new Exception("error en la creacion del posT");
			}
		}

	public function PaginadoPost($pagina){

		$PostPorPagina = 3;
		//$Pagina = 1;
		$InicioPagina=($pagina-1)*$PostPorPagina;
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

		$NumFilas = count($fila);
		$TotalPaginas=ceil($NumFilas/$PostPorPagina);

		return array($InicioPagina, $PostPorPagina,$TotalPaginas);
	} 

	public function ListarPost($InicioPagina, $PostPorPagina){
		
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo LIMIT $InicioPagina, $PostPorPagina";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
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