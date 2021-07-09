
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
}