<?php

require_once("../conexion/conexion.php");

$id_pelicula = $_GET["id_boletos"];

$id_pelicula = (int)$id_pelicula;

$sql = "DELETE FROM boletos WHERE id_boletos=". $id_pelicula;



$valid = Conexion::ejecutar($sql);

header("location: ../view/administrador/boletos_reservados.php");

?>