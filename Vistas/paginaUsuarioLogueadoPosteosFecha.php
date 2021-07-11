<html>
	<head>
		<title>Maqueta Blog Parcial Final</title>
		<link rel="stylesheet" href="../css/hojaEstilos.css" type="text/css"/>
		<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="hojaEstilos.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<?php
		session_start();
		if(!isset($_SESSION["usuario"])){
			header("Location:paginaprincipal.php");
		}
		?>
		<div class="contenido">
			<div id="banner">
			<div id=inicioUsusarioLogueado>
				<a href="paginaUsuarioLogueadoPosteosFecha.php">BLOG</a>
				<br>
				<a href="paginaNuevoPost.php">NUEVO POST</a>
			</div>
			<div id=fotoPerfil>
			
			</div>
			<div id=usuariologueado>
				<?php echo "Usuario: " . $_SESSION["usuario"];?>
				<br>
       			<button type="submit" class="btn btn-default" onclick="location.href='paginaprincipal.php';">Cerrar Sesion</button> 
			</div>
			</div>
			<div class="cajapost">
			<div class="cajapost">
			<div id="posts">
		  		<ul class="">
				   	<h2>Listado POSTS</h2>
			        <?php
				    	require_once('listadoPostGeneral.php');
				   	?>
				</ul>
			</div>
		</div>
		</div>
			<div id ="meses">
				<ul id="listameses">
					<li><a href="">Enero</a></li>
					<li><a href="">Febredo</a></li>
					<li><a href="">Marzo</a></li>
					<li><a href="">Abril</a></li>
					<li><a href="">Mayo</a></li>
					<li><a href="">Junio</a></li>
					<li><a href="">Julio</a></li>
					<li><a href="">Agosto</a></li>
					<li><a href="">Setiembre</a></li>
					<li><a href="">Octubre</a></li>
					<li><a href="">Noviembre</a></li>
					<li><a href="">Diciembre</a></li>
				</ul>	
			</div>
		</div>
	</body>
</html>