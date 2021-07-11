<?php 
	
	require '../Controladores/ControladorPost.class.php';
	
	$idPost = $_POST['idPost'];
	$idUsuario = $_POST["idUsuario"];
	$titulo = $_POST["TituloPost"];
	$cuerpoPost = $_POST["cuerpoPost"];
	$fecha = date("Y-m-d H:i:s");  
	
	$actualiza = ControladorPost::ActualizaPost($idPost,$titulo, $cuerpoPost, $fecha);
	echo "<script>alert('Post actualizado con éxito');window.location= 'paginaUsuarioLogueado.php'</script>";
	
	