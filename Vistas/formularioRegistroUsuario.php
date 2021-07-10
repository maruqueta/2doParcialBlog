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
					$creado = ControladorUsuario::AltaUsuario($_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario'], $_POST['Usuario'], "");
					if ($creado){
						echo "<script>alert('Usuario registrado con éxito');window.location= 'paginaprincipal.html'</script>";
					}else{
						echo "<script>alert('Usuario no se pudo registrar, ingrese otro usuario');window.history.back()</script>";
					}
				break;

				}
	}else{
		if((isset($_FILES['FotoPerfil']['name']) && ($_FILES['FotoPerfil']['error']==UPLOAD_ERR_OK))){
			$destination_path = getcwd().DIRECTORY_SEPARATOR . "imagenes\ ";
			$ruta_imagen = $destination_path .$_POST['Usuario'].".jpg";
			$creado = ControladorUsuario::AltaUsuario($_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario'], $_POST['Usuario'], $_FILES['FotoPerfil']['name']);
			if ($creado){
				move_uploaded_file($_FILES['FotoPerfil']['tmp_name'], $ruta_imagen);
				echo "<script>alert('Usuario registrado con éxito');window.location= 'paginaprincipal.html'</script>";
			}else{
				echo "<script>alert('Usuario no se pudo registrar, ingrese otro usuario');window.history.back()</script>";
				}
			}else{
				echo "<script>alert('Archivo de image no se ha cargado correctamente ');window.history.back()</script>";
			}
		}