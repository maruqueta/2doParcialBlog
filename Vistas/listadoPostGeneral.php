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
		foreach ( ControladorPost::ListadoPost() as $fila){
			//echo $fila -> TituloPost . " - " . $fila -> CuerpoPost . "<br>";
			echo $fila['TituloPost'] . " - " . $fila['CuerpoPost'] ." ++++ "."<br>";
		}