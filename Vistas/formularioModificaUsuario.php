<?php 
	
	require '../Controladores/ControladorUsuario.class.php';
	
	
	if ($_FILES['FotoPerfil']['error']){
		switch ($_FILES['FotoPerfil']['error']){
			case 1: 
				echo "<script>alert('El tamaño del archivo excede lo permitido por el servidor'); window.history.back()</script>";
			break;
			
			case 2: 
					echo "<script>alert('El tamaño del achivo excede los 2 MB'); window.history.back()</script>";
				break;
			
			case 3:
				echo "<script>alert('Envio de archivo interrumpido, vuelva a intentar'); window.history.back()</script>";
				break;
				
			case 4:
			
					$creado = ControladorUsuario::ActualizaUsuario($_POST["idUsuario"], $_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario'], "");
					if ($creado){
						echo "<script>alert('Usuario actualizado con éxito');window.location= 'paginaUsuarioLogueado.php'</script>";
					}else{
						echo "<script>alert('Error 1: Usuario no se pudo actualizar, contacte con el administrador del sistema');window.history.back()</script>";
					}
					
			break;
			
			}
			
		}else{
			if((isset($_FILES['FotoPerfil']['name']) && ($_FILES['FotoPerfil']['error']==UPLOAD_ERR_OK))){
				//$destination_path = getcwd().DIRECTORY_SEPARATOR . "imagenes\ ";
				$ruta_imagen = "../imagenes/" .$_POST['idUsuario'].".jpg";
				$creado = ControladorUsuario::ActualizaUsuario($_POST["idUsuario"], $_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario'], $_POST['idUsuario'].".jpg");
					if ($creado){
						move_uploaded_file($_FILES['FotoPerfil']['tmp_name'], $ruta_imagen);
						echo "<script>alert('Usuario actualizado con éxito');window.location= 'paginaUsuarioLogueado.php'</script>";
					}else{
						echo "<script>alert('Error2: Usuario no se pudo actualizar, contacte con el administrador del sistema');window.history.back()</script>";
					}
			}else{
				echo "<script>alert('Error3: Usuario no se pudo actualizar, contacte con el administrador del sistema');window.history.back()</script>";
				}
				
			}