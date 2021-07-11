<?php 
	
	require '../Controladores/ControladorPost.class.php';
	
	$idPost = $_GET['IdPost'];
	
	$borra = ControladorPost::EliminarPost($idPost);
	echo "<script>alert('Post borrado con éxito');window.location= 'paginaUsuarioLogueado.php'</script>";
	
	