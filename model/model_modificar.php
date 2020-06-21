<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre_add'];
$genero = $_POST['genero_add'];
$descripcion = $_POST['descripcion_add'];
$link_pelicula = $_POST['link_add'];
$trailer = $_POST['trailer_add'];


$sql = "UPDATE peliculas SET nombre='$nombre', genero='$genero', descripcion='$descripcion', link_pelicula='$link_pelicula', trailer='$trailer' WHERE id = '$id'";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../view/administrador/administrar.php");
}else{
	//echo "BAD";
	header("location: ../view/administrador/administrar.php");
}

?>