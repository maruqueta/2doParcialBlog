<?php 
	
	require '../Controladores/ControladorPost.class.php';
	
	$idPost = $_GET['IdPost'];
	$idUsuario = $_SESSION["usuario"];
	
	list($TituloPost, $CuerpoPost) = ControladorPost::ObtienePost($idPost);
	
	echo "<input type='hidden' name='idUsuario' id='idUsuario' value='". $idUsuario."'>	";
	echo "TITULO : <input type='text' class='form-control' id='idtitulopost' name='TituloPost' maxlength='50' minlength='2' placeholder='TITULO' style='border:5px solid #f6f6f6' value='". $TituloPost."' required>";
	echo "</br> CONTENIDO: <textarea type='text' class='form-control' name='cuerpoPost' maxlength='1000' minlength='2' placeholder='POST' required>". $CuerpoPost."</textarea>";
