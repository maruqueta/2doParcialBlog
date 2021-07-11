<?php
	require '../Controladores/ControladorPost.class.php';

		$mes=$_GET["mes"];
		
		if(isset($_GET["pagina"])){
				$pagina=$_GET["pagina"];
		}else{
			$pagina=1;
		}

		list($InicioPagina, $PostPorPagina ,$TotalPaginas)	= ControladorPost::PaginadoPostMesUsuario($pagina, $mes, $_SESSION['idUsuario']);


		foreach ( ControladorPost::ListadoPostMesUsuario($InicioPagina, $PostPorPagina, $mes,  $_SESSION['idUsuario']) as $fila){
			//echo $fila -> TituloPost . " - " . $fila -> CuerpoPost . "<br>";
			echo "<h3>" . $fila['TituloPost'] ."</h3> " . $fila['FechaPosteo'] ."</br>" . $fila['CuerpoPost'] ."</br>";
			echo "<a href='paginaModificaPost.php?IdPost=". $fila['IdPost'] ."'><input type ='button' name='Modificar' id='Modificar' value='Modificar'></a>";
			echo "<a href='formularioBorrarPost.php?IdPost=". $fila['IdPost'] ."'><input type ='button' name='Borrar' id='Borrar' value='Borrar'></a>";
			echo "<hr/>";

			}
			for($i=1;$i<=$TotalPaginas;$i++){
				echo "<a href='?mes=".$mes."&pagina=". $i ."'> ". $i . "</a>";
		}	