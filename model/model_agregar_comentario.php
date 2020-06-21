<?php

$pelicula = $_GET['pelicula'];
$sql ="SELECT * FROM comentarios WHERE pelicula_id = '{$pelicula}'";
$datos = Conexion::consultar($sql);

?>