<?php
	require '../Controladores/ControladorPost.class.php';

		if(isset($_GET["pagina"])){
			if ($_GET["pagina"]==1){
				header("Location:paginaUsuarioLogueado.php");
			}else{
				$pagina=$_GET["pagina"];
			}
		}else{
			$pagina=1;
		}

		//echo $_SESSION['idUsuario'];
		list($InicioPagina, $PostPorPagina ,$TotalPaginas)	= ControladorPost::PaginadoPostUsuario($pagina, $_SESSION['idUsuario']);
		foreach ( ControladorPost::ListadoPostUsuario($InicioPagina, $PostPorPagina, $_SESSION['idUsuario']) as $fila){ //:
		echo "<h3>" . $fila['TituloPost'] ."</h3> ".  $fila['FechaPosteo'] . "</br>". $fila['CuerpoPost'] ."<br>";
		echo "<a href='paginaModificaPost.php?IdPost=". $fila['IdPost'] ."'><input type ='button' name='Modificar' id='Modificar' value='Modificar'></a>";
		echo "<a href='formularioBorrarPost.php?IdPost=". $fila['IdPost'] ."'><input type ='button' name='Borrar' id='Borrar' value='Borrar'></a>";
		echo "<hr/> ";
			}
			for($i=1;$i<=$TotalPaginas;$i++){
				echo "<a href='?pagina=". $i ."'> ". $i . "</a>";
		}	
		