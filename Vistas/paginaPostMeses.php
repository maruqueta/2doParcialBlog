<html>
<head>
	<title>Blogsito Sin Terminar</title>
	<link rel="stylesheet" href="../css/hojaEstilos.css" type="text/css"/>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="contenido">
		<div id="banner">
		<div id=inicio>
			<img src="" title="BLOG">
			<a href="paginaprincipal.php">Inicio</a></br>
		</div>
		<div>
		<form id="formulario" action="formularioLogueoUsuario.php" method="post">
		<div id=usuario>
			<div class="input-group">
				<div class="input-group-addon">
					<div class="glyphicon glyphicon-envelope">
					</div>
				</div> 
  				<input type="text" class="form-control" id="login" name="NombreUsuario" "placeholder="e-mail o usuario" required>
			</div>
			<div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-lock">
                	</div>
                </div> 
                <input type="password" class="form-control" id="clave" name="ContrasenaUsuario" maxlength="20" minlength="3" required pattern="[A-Za-z0-9]+" placeholder="contraseña" required>
      </div>
            <div>
            	<button type="submit" class="btn btn-default">INICIO SESION</button> 
            </div>
      </div>
		</form>
		<button style="float: right" type="submit" class="btn btn-default" onclick="location.href='paginaRegistroUsuario.php';">Registrarse</button>
		</div>
		
		</div>
		<div class="cajapost">
			<div id="posts">
		  		<ul class="">
				  <h2 style="float: left">Listado de Post</h2></br>
				  	</br>
				  	</br>
				  	</br>
			        <?php
			         require_once('listadoPostMeses.php');
				   		?>
				</ul>
			</div>
			</div>
	</div>
		<form id="listadoPostMeses" action="listadoPostMeses.php" method="post">
		<div id ="meses">
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
			</ul>
		</div>
		</form>

</body>
</html>