<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/hojaEstilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body style="background:lightblue;">
	<div class="formularioRegistro">
		<div style="color:#ffffff;">
			<div class="glyphicon glyphicon-pencil registro">
				<h2>REGISTRO</h2>
			</div>&nbsp;&nbsp;
		</div>
		<hr>
		<form id="formularioRegistroUsuario" action="formularioRegistroUsuario.php" method="post" enctype="multipart/form-data">
			<div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-user">
                	</div>
           			</div> 
                <input type="text" class="form-control" name="NombreUsuario" id="nombreUsuario" maxlength="20" minlength="4" placeholder="Nombres" required>
            </div>
            <div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-user">
                	</div>
           		</div> 
                <input type="text" class="form-control" name="ApellidoUsuario" id="apellidoUsuario" maxlength="20" minlength="4" placeholder="Apellidos" required>
            </div>
			<div class="input-group">
                	<div class="input-group-addon">
                	<div class="glyphicon glyphicon-envelope">
                	</div>
           			</div> 
  				<input type="email" name="CorreoUsuario" class="form-control" id="campoemail" placeholder="E-mail" required>
			</div>
            <div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-user">
                	</div>
           		</div> 
                <input type="text" class="form-control" name="Usuario" id="Usuario" maxlength="20" minlength="4" placeholder="Usuario" required>
            </div>
			<div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-lock">
                	</div>
               	</div>
                <input type="password" name="ContrasenaUsuario" class="form-control" id="clave" maxlength="20" minlength="2" required pattern="[A-Za-z0-9]+" placeholder="Contraseña" required>
            </div>
            <div>
				<input type="hidden" name="MAX_TAM" value="2097152">
				<label>Selecionar Foto de Perfil</label>
				</br>Selecciona una imagen con tamaño inferior a 2 MB
				<input type="file" name="FotoPerfil" id="FotoPerfil">
			</div>
			<div class="form-group">
  				<button type="submit" class="btn btn-default" onclick="location.href='paginaprincipal.html';">Registrarse
  				</button>
  				 </form>
            	<button type="submit" class="btn btn-default" onclick="location.href='paginaprincipal.html';">Cancelar
            	</button> 
            </div>
       
	</div>
</body>
</html>