<?php 
	
	require '../Controladores/ControladorUsuario.class.php';

	$creado = ControladorUsuario::AltaUsuario($_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario']);

	// $creado = ControladorUsuario::AltaUsuario($_POST['NombreUsuario'],$_POST['ApellidoUsuario'],$_POST['CorreoUsuario'],$_POST['ContrasenaUsuario'],$_FILES['FotoPerfil']);


	// // $NombreUsuario=$_POST['nombreUsuario'];
	// // $ApellidoUsuario=$_POST['apellidoUsuario'];
	// // $CorreoUsuario= $_POST['emailUsuario'];
	// // $ContrasenaUsuario=$_POST['passUsuario'];
	// // $fotoPerfil=$_POST['fotoPerfil'];
	// // print_r($_POST);
	// // print_r($_FILES);
	// $fotoPerfil = $_FILES['fotoPerfil']['name'];
	// $origen = $_FILES['fotoPerfil']['tmp_name'];
	// echo "$origen";
	// $imagenFotoPerfil = $nombreUsuario."-".$fotoPerfil;
	// $destino = "imagenes/";
		
	// $destino = $destino.$imagenFotoPerfil;
	// echo "$destino";

	// if ($_FILES["fotoPerfil"]["error"]) {
	// 	echo "cede".$_FILES['fotoPerfil']['error'];
	// }
	// else{
	// if(move_uploaded_file($origen,$destino)){
	// 	echo "subio";
	// }
	// }

	// if( $NombreUsuario !== "" && $ApellidoUsuario !== "" && $CorreoUsuario !== "" && $ContrasenaUsuario !== "" ){
 //        	registrar($NombreUsuario,$ApellidoUsuario,$CorreoUsuario,$ContrasenaUsuario,$destino);
 //        }
	// else{
	//  header("dejo campo vacio");
 //    }

	// function registrar($nombreUsuario,$emailUsuario,$passUsuario,$destino)
	// {
	// require 'config.php';
	// $sql = "INSERT INTO usuarios ( nombreUsuario,emailUsuario,passUsuario,ruta ) VALUES (
	// 		'$nombreUsuario',
	// 		'$emailUsuario',
	// 		'$passUsuario',
	// 		'$destino'
	// 		)";
	// 		#echo $sql;
 // 	return mysqli_query($conexion,$sql);
 // 	}