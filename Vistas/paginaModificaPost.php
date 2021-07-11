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
			<div class="nuevoPostCuerpo">
				<form id="formularioModificaPost" action="formularioModificaPost.php" method="post">
					<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION["usuario"]; ?>">	
					<input type="hidden" name="idPost" id="idPost" value="<?php echo $_GET["IdPost"]; ?>">	
			        <?php
				    	require_once('paginaCargaPost.php');
				   	?>
				   <div class="form-group">
							<button type="submit" class="btn btn-default" onclick="location.href='paginaUsuarioLogueado.php';">Actualizar
			  				</button>
  				</div>
				</form>
				<div class="form-group">
  			<button type="submit" class="btn btn-default" onclick="location.href='paginaUsuarioLogueado.php';">Cancelar
            	</button>
		        </div>
			</div>
	 <form id="listadoPostMesesUsuario" action="listadoPostMesesUsuario.php" method="post">
		<div id ="meses">
			<a href="paginaUsuarioLogueado.php">[Ver Todos]</a></br></br>
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
				
			</ul>
		</div>
		</form>
		</div>
	</body>
</html>