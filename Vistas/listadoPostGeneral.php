<?php
	require '../Controladores/ControladorPost.class.php';

		#ejml1 donde todo se muestra como 1 solo
		//var_dump (ControladorPost::ListadoPost());
		#foreach ( ControladorPost::ListadoPost() as $fila )
		#{
		#echo $fila['TituloPost'] . "  " .$fila['CuerpoPost'] ."<br>";
		#}

		echo "TITULO - POST <br>";
		#forma correcta ejm 2

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
			echo "<h3>" ."<a href='www.google.com'> ". $fila['TituloPost'] ."</h3> ". "</a> "." - " . $fila['CuerpoPost'] ." ++++ "."<br>";
			echo "<hr/>";

			}
			for($i=1;$i<=$TotalPaginas;$i++){
				echo "<a href='?pagina=". $i ."'> ". $i . "</a>";
		}	

