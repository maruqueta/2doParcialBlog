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
		$sql = "INSERT INTO posteo (TituloPost,CuerpoPost, idUsuario) VALUES (
		'{$this -> TituloPost}',
		'{$this -> CuerpoPost}','{$this -> idUsuario}'
		)";		
		$this -> conexion -> query($sql);
		if ($this -> conexion -> error) {
			throw new Exception("error en la creacion del post");
		}
	}
	
		public function EliminarPost(){
		$sql = "delete from posteo where idPost='{$this -> idPost}'";		
		$this -> conexion -> query($sql);
		if ($this -> conexion -> error) {
			throw new Exception("error al borrar el post");
		}
	}
	
		public function ActualizaPost(){
		$sql = "update posteo set TituloPost = '{$this -> TituloPost}', 
		CuerpoPost = '{$this -> CuerpoPost}',
		FechaPosteo = '{$this -> fecha}'
		where idPost= '{$this -> idPost}'";		
		$this -> conexion -> query($sql);
		if ($this -> conexion -> error) {
			throw new Exception("error en la actualizacion del post");
			return false;
		}
		return true;
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
	
		public function PaginadoPostUsuario($pagina, $idUsuario){

		$PostPorPagina = 3;
		//$Pagina = 1;
		$InicioPagina=($pagina-1)*$PostPorPagina;
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo where IdUsuario = '{$idUsuario}'";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

		$NumFilas = count($fila);
		$TotalPaginas=ceil($NumFilas/$PostPorPagina);

		return array($InicioPagina, $PostPorPagina,$TotalPaginas);
	} 

		public function PaginadoPostMes(){
		$pagina = $this -> pagina;
		$mes = $this -> mes;
		$PostPorPagina = 3;
		//$Pagina = 1;
		$InicioPagina=($pagina-1)*$PostPorPagina;
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo where month(fechaposteo) = $mes";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

		$NumFilas = count($fila);
		$TotalPaginas=ceil($NumFilas/$PostPorPagina);

		return array($InicioPagina, $PostPorPagina,$TotalPaginas);
	} 

		public function PaginadoPostMesUsuario(){
		$pagina = $this -> pagina;
		$mes = $this -> mes;
		$idUsuario = $this -> idUsuario;
		
		$PostPorPagina = 3;
		//$Pagina = 1;
		$InicioPagina=($pagina-1)*$PostPorPagina;
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo where IdUsuario = '{$idUsuario}' and month(fechaposteo) = $mes";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);

		$NumFilas = count($fila);
		$TotalPaginas=ceil($NumFilas/$PostPorPagina);

		return array($InicioPagina, $PostPorPagina,$TotalPaginas);
	} 


	public function ListarPost($InicioPagina, $PostPorPagina){
		
		$sql = "SELECT p.*, u.usuario FROM posteo p , usuarios u where p.IdUsuario=u.IdUsuario order by FechaPosteo desc LIMIT $InicioPagina, $PostPorPagina";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
			return $fila;
		}
		
		public function ListarPostMes(){
		$InicioPagina= $this -> InicioPagina; 
		$PostPorPagina = $this -> PostPorPagina; 
		$mes = $this -> mes;
		$sql = "SELECT p.*, u.usuario FROM posteo p , usuarios u where p.IdUsuario=u.IdUsuario and month(fechaposteo) = $mes order by FechaPosteo desc LIMIT $InicioPagina, $PostPorPagina";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
			return $fila;
		}
		
		
		public function ListarPostUsuario($InicioPagina, $PostPorPagina, $idUsuario){
		$sql = "SELECT * FROM posteo where IdUsuario = '{$idUsuario}' order by FechaPosteo desc LIMIT $InicioPagina, $PostPorPagina";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
			return $fila;
		}
		
		public function ListarPostMesUsuario(){
		$InicioPagina= $this -> InicioPagina; 
		$PostPorPagina = $this -> PostPorPagina; 
		$idUsuario = $this -> idUsuario; 
		$mes = $this -> mes;
		$sql = "SELECT * FROM posteo where month(fechaposteo) = $mes and IdUsuario = '{$idUsuario}' order by FechaPosteo desc LIMIT $InicioPagina, $PostPorPagina";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
			return $fila;
		}

		public function ObtienePost(){
		$idPost = $this -> idPost;
		$sql = "SELECT TituloPost,CuerpoPost FROM posteo where IdPost = {$idPost}";
		$fila = array();
		$fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC);
		foreach ($fila as $registro){
			return array($registro['TituloPost'], $registro['CuerpoPost']);
			}
		
	} 

	}
