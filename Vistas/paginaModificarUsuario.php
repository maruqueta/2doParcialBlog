<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/hojaEstilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body style="background:lightblue;">
			<?php
		session_start();
		if(!isset($_SESSION["usuario"])){
			header("Location:paginaprincipal.php");
			}
		?>
	
	<div class="formularioRegistro">
		<div style="color:#ffffff;">
			<div class="glyphicon glyphicon-pencil registro">
				<?php echo "<h2>MODIFICA USUARIO: </br>" . $_SESSION["usuario"]. "</h2>" ?>
			</div>&nbsp;&nbsp;
		</div>
		<hr>
		<form id="formularioModificaUsuario" action="formularioModificaUsuario.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="idUsuario" id="usuario" value="<?php echo $_SESSION["usuario"]; ?>">	
			<div class="input-group">
          <div class="input-group-addon">
                	<div class="glyphicon glyphicon-user">
                	</div>
      		</div> 
       		<input type="text" class="form-control" name="NombreUsuario" id="nombreUsuario" maxlength="50" minlength="3" placeholder="Nombres" value = <?php echo $_SESSION["NombreUsuario"] ?> required>
			</div>
      <div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-user">
                	</div>
           		</div> 
                <input type="text" class="form-control" name="ApellidoUsuario" id="apellidoUsuario" maxlength="50" minlength="3" placeholder="Apellidos" value = <?php echo $_SESSION["ApellidoUsuario"] ?> required>
            </div>
			<div class="input-group">
                	<div class="input-group-addon">
                	<div class="glyphicon glyphicon-envelope">
                	</div>
           			</div> 
  				<input type="email" name="CorreoUsuario" class="form-control" id="campoemail" placeholder="E-mail" value = <?php echo $_SESSION["CorreoUsuario"] ?>  required>
			</div>
			<div class="input-group">
                <div class="input-group-addon">
                	<div class="glyphicon glyphicon-lock">
                	</div>
               	</div>
                <input type="password" name="ContrasenaUsuario" class="form-control" id="clave" maxlength="20" minlength="2" pattern="[A-Za-z0-9]+" placeholder="Ingrese nueva Contrasenia o deje vacio">
            </div>
				<input type="hidden" name="MAX_TAM" value="2097152">
				<label>Selecionar Foto de Perfil</label>
				</br>Selecciona una imagen con tamaño inferior a 2 MB
				<input type="file" name="FotoPerfil" id="FotoPerfil">
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
</body>
</html>