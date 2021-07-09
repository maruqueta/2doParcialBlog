<?php 

require '../ConfiguracionConexion.php';

Class Modelo{
	protected $IPDB;
	protected $NombreUsuarioDB;
	protected $ContrasenaDB;
	protected $NombreDB;
	protected $PuertoDB;
	protected $conexion;

	public function __construct(){
		$this -> inicializarParametrosDeConexion();
		$this -> conexion = new mysqli(
			$this -> IPDB,
			$this -> NombreUsuarioDB,
			$this -> ContrasenaDB,
			$this -> NombreDB,
			$this -> PuertoDB
		);
		if($this -> conexion -> connect_error){
			throw new Exception("Error al conectar");
		}
	}

	public function inicializarParametrosDeConexion(){
			$this -> IPDB = IP_DB;
			$this -> NombreUsuarioDB = NombreUsuario_DB;
			$this -> NombreDB = Nombre_DB;
			$this -> ContrasenaDB = Contrasena_DB;
			$this -> PuertoDB = Puerto_DB;
	}
}
