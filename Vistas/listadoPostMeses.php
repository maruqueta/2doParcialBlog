<?php
	require '../Controladores/ControladorPost.class.php';

		$mes=$_GET["mes"];
		
		if(isset($_GET["pagina"])){
				$pagina=$_GET["pagina"];
		}else{
			$pagina=1;
		}

		list($InicioPagina, $PostPorPagina ,$TotalPaginas)	= ControladorPost::PaginadoPostMes($pagina, $mes);


		foreach ( ControladorPost::ListadoPostMes($InicioPagina, $PostPorPagina, $mes) as $fila){
			//echo $fila -> TituloPost . " - " . $fila -> CuerpoPost . "<br>";
			echo "<h3>" . $fila['TituloPost'] ."</h3> ". $fila['usuario'] ." - " . $fila['FechaPosteo'] ."</br>" . $fila['CuerpoPost'] ."</br>";
			echo "<hr/>";

			}
			for($i=1;$i<=$TotalPaginas;$i++){
				echo "<a href='?mes=".$mes."&pagina=". $i ."'> ". $i . "</a>";
		}	