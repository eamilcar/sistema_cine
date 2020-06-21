<?php

include("../conexion/conexion.php");
include("usuario_session.php");
include("administrador_session.php");


 

$name_pelicula = @$_POST['name_pelicula'];
$boletos_add = @$_POST['boletos_add'];

$sala_add = @$_POST['sala_add'];
$fecha_add = @$_POST['fecha_add'];
$hora_add = @$_POST['hora_add'];







$sql = "INSERT INTO boletos (pelicula, boletos, fecha, hora, sala) VALUES
('".$name_pelicula."','".$boletos_add."','".$fecha_add."','".$hora_add."','".$sala_add."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header("Location: ../view/usuario/peliculas_session.php");
}else{
	// echo "bad";
	header("Location: ../view/usuario/peliculas_session.php?m=false");
}

?>