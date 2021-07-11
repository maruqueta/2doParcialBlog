<?php
	require '../Controladores/ControladorPost.class.php';

		if(isset($_GET["pagina"])){

			if ($_GET["pagina"]==1){
				header("Location:paginaprincipal.php");
			}else{
				$pagina=$_GET["pagina"];
			}
		}else{
			$pagina=1;
		}

		list($InicioPagina, $PostPorPagina ,$TotalPaginas)	= ControladorPost::PaginadoPost($pagina);

		foreach ( ControladorPost::ListadoPost($InicioPagina, $PostPorPagina) as $fila){
			//echo $fila -> TituloPost . " - " . $fila -> CuerpoPost . "<br>";
		echo "<h3>" . $fila['TituloPost'] ."</h3> ". "</a> "." - " . $fila['CuerpoPost'] ." ++++ "."<br>";
		echo "<hr/>";

		}
		
		for($i=1;$i<=$TotalPaginas;$i++){
				echo "<a href='?pagina=". $i ."'> ". $i . "</a>";
		}