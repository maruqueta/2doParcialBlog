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
			<div id=inicio>
				<a href="paginaUsuarioLogueadoPosteosFecha.php"><img src="../imagenes/icono.jpg" width="150px" title="BLOG"/></a></br>
			</div>
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
				<form id="listadoPostMesesUsuario" action="listadoPostMesesUsuario.php" method="post">
					<div id ="meses">
						Mis Post por mes:
						<ul id="listameses">
							<a href="paginaPostMesesUsuarioLogueado.php?mes=1">Enero</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=2">Febrero</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=3">Marzo</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=4">Abril</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=5">Mayo</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=6">Junio</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=7">Julio</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=8">Agosto</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=9">Septiembre</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=10">Octubre</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=11">Noviembre</a></br>
							<a href="paginaPostMesesUsuarioLogueado.php?mes=12">Diciembre</a></br>
								</br>
							<a href="paginaUsuarioLogueado.php">[Ver Todos]</a></br>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>