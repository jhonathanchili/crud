<?php 

include_once 'config.php';
include_once 'conexion.php';
include_once 'Usuario.php';
include_once 'RepositorioUsuario.php';
include_once 'ValidadorLogin.php';

Conexion::abrirConexion();

$validador = new ValidadorLogin($_POST['email'], $_POST['password'], Conexion::obtenerConexion());

if ($validador->obtenerError() === "" && !is_null($validador->obtenerUsuario())) {
	echo "Sesión iniciada";
}
else{
	echo $validador->obtenerError();
}

Conexion::cerrarConexion();

?>