<?php

require '../Modelos/ModeloPost.Class.php';	

class ControladorPost{

	public static function AltaPost($TituloPost,$CuerpoPost){

		try {
			$post = new ModeloPost();
			$post -> TituloPost = $TituloPost;
			$post -> CuerpoPost = $CuerpoPost;
			$post -> CrearPost();
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

	public static function PaginadoPost($pagina){

			$p = new ModeloPost();
			$p->pagina = $pagina;
			return $p -> PaginadoPost($pagina);

		}
}