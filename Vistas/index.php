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
		</div>
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
                <input type="password" class="form-control" id="clave" name="ContrasenaUsuario" maxlength="20" minlength="4" required pattern="[A-Za-z0-9]+" placeholder="contraseña" required>
            </div>
            <div>
            	<button type="submit" class="btn btn-default">INICIO SESION</button> 
            </form>
            	<button type="submit" class="btn btn-default" onclick="location.href='paginaRegistroUsuario.html';">Registrarse</button>
            </div>
		</div>
	
		</div>
		<div class="cajapost">
			<div id="posts">
			<nav>
			  	<ul class="">
				   	    <h2>Listado POSTS</h2>
			            <?php
				        require_once('listadoPostGeneral.php');
				        ?>
			

				</ul>
			  	<a href="#" class="previous">&laquo; Anterior</a>
				<a href="#" class="next">Siguiente &raquo;</a>    
			</nav>
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