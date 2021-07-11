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
				<label><?php echo "Usuario: " . $_SESSION["usuario"]; 
							if ($_SESSION["FotoPerfil"]!=""){
								echo "<img src='../imagenes/". $_SESSION["usuario"]. ".jpg' width='100px'/>";
								}
					
					?></label>
       			<button type="submit" class="btn btn-default" onclick="location.href='paginaModificaUsuario.php';">Actualizar Usuario</button> 
       			<button type="submit" class="btn btn-default" onclick="location.href='cierra.php';">Cerrar Sesion</button> 
			</div>
			</div>
			<div class="cajapost">
			<div id="posts">
			  	<ul class="">
				   	    <h2>Mis Posts</h2>
			            <?php
			            require_once('listadoPostMesesUsuario.php');
				        	?>
				</ul>
			</div>
		<form id="listadoPostMeses" action="listadoPostMeses.php" method="post">
			<div id ="meses">
				Mis Post por mes:
				<ul id="listameses">
				
					<a href="?mes=1">Enero</a></br>
					<a href="?mes=2">Febrero</a></br>
					<a href="?mes=3">Marzo</a></br>
					<a href="?mes=4">Abril</a></br>
					<a href="?mes=5">Mayo</a></br>
					<a href="?mes=6">Junio</a></br>
					<a href="?mes=7">Julio</a></br>
					<a href="?mes=8">Agosto</a></br>
					<a href="?mes=9">Septiembre</a></br>
					<a href="?mes=10">Octubre</a></br>
					<a href="?mes=11">Noviembre</a></br>
					<a href="?mes=12">Diciembre</a></br>
					</br>
					<a href="paginaUsuarioLogueado.php">[Ver Todos]</a></br>
				</ul>
			</div>
		</form>
	</body>
</html>