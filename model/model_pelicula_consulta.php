<?php

$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM peliculas WHERE id = '{$pelicula}'";
$datos = Conexion::consultar($sql);

?>