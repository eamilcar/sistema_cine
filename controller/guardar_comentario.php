<?php
 
include("../conexion/conexion.php");
include("usuario_session.php");
include("administrador_session.php");
  
$pelicula_id = @$_POST['pelicula_id'];
$comentario = @$_POST['comentario'];
$nombre = $_SESSION['usuario']['nombre'];
$correo = $_SESSION['usuario']['correo'];
$fecha = date("Y-m-d");
 
if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
	$Location = "Location: ../view/administrador/ver_pelicula_session.php?pelicula={$pelicula_id}";	
}else{
	$Location = "Location: ../view/usuario/ver_pelicula_session.php?pelicula={$pelicula_id}";	
}

if($comentario){

$sql = "INSERT INTO comentarios(pelicula_id,comentario,fecha,nombre,correo) VALUES ('".$pelicula_id."','".$comentario."','".$fecha."','".$nombre."','".$correo."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header($Location);
}else{
	// echo "bad";
	header($Location);
}

}else{
	header($Location);
}

?>