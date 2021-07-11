<?php 
	
	require '../Controladores/ControladorPost.class.php';

	$creado = ControladorPost::AltaPost($_POST['TituloPost'],$_POST['CuerpoPost'], $_POST['idUsuario']);
	
	echo "<script>window.location= 'paginaUsuarioLogueado.php'</script>";
 	 	