<?php

require '../Modelos/ModeloPost.Class.php';	

class ControladorPost{

	public static function AltaPost($TituloPost,$CuerpoPost, $idUsuario){

		try {
			$post = new ModeloPost();
			$post -> TituloPost = $TituloPost;
			$post -> CuerpoPost = $CuerpoPost;
			$post -> idUsuario = $idUsuario;
			$post -> CrearPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function EliminarPost($idPost){

		try {
			$post = new ModeloPost();
			$post -> idPost = $idPost;
			$post -> EliminarPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function ActualizaPost($idPost,$titulo, $cuerpoPost, $fecha){

		try {
			$post = new ModeloPost();
			$post -> TituloPost = $titulo;
			$post -> CuerpoPost = $cuerpoPost;
			$post -> idPost = $idPost;
			$post -> fecha = $fecha;
			$post -> ActualizaPost();
			return true;

		} catch (Exception $e) {

			return $e -> getMessage();

		}
	}
	
	public static function ListadoPost($InicioPagina, $PostPorPagina){

		$p = new ModeloPost();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		return $p -> ListarPost($InicioPagina, $PostPorPagina);

	}
	
	public static function ListadoPostMes($InicioPagina, $PostPorPagina, $mes){

		$p = new ModeloPost();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		$p-> mes = $mes;
		return $p -> ListarPostMes();

	}

	public static function ListadoPostMesUsuario($InicioPagina, $PostPorPagina, $mes, $idUsuario){

		$p = new ModeloPost();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		$p->idUsuario = $idUsuario;
		$p-> mes = $mes;
		return $p -> ListarPostMesUsuario();

	}
	
	public static function ListadoPostUsuario($InicioPagina, $PostPorPagina, $idUSuario){

		$p = new ModeloPost();
		$p->InicioPagina = $InicioPagina;
		$p->PostPorPagina = $PostPorPagina;
		$p->idUsuario = $idUSuario;
		return $p -> ListarPostUsuario($InicioPagina, $PostPorPagina, $idUSuario);

	}
	
	public static function PaginadoPost($pagina){

		$p = new ModeloPost();
		$p->pagina = $pagina;
		return $p -> PaginadoPost($pagina);

	}
	
	public static function PaginadoPostMes($pagina, $mes){

		$p = new ModeloPost();
		$p->pagina = $pagina;
		$p->mes = $mes;
		return $p -> PaginadoPostMes();

	}
	
	public static function PaginadoPostMesUsuario($pagina, $mes, $idUsuario){

		$p = new ModeloPost();
		$p->pagina = $pagina;
		$p->mes = $mes;
		$p->idUsuario = $idUsuario;
		return $p -> PaginadoPostMesUsuario();

	}
	
	public static function PaginadoPostUsuario($pagina, $idUsuario){

		$p = new ModeloPost();
		$p->pagina = $pagina;
		$p->idUsuario = $idUsuario;
		return $p -> PaginadoPostUsuario($pagina,$idUsuario);

	}
	
	public static function ObtienePost($idPost){

		$p = new ModeloPost();
		$p->idPost = $idPost;
		return $p -> ObtienePost();

	}
}
