<?php

if (isset($_GET['peliculas'])) {

	$categoria = $_GET['peliculas'];
	$sql ="SELECT * FROM peliculas WHERE id = '{$peliculas}'";
	$datos = Conexion::consultar($sql);

	foreach ($datos as $key) {
		$sql ="SELECT * FROM peliculas WHERE genero = '{$key['id']}' order by id desc";
		$datos = Conexion::consultar($sql);
	}

}else if (isset($_GET['buscar'])) {

	$buscar = $_GET['buscar'];
	$sql ="SELECT * FROM peliculas WHERE nombre LIKE '%{$buscar}%' OR descripcion LIKE '%{$buscar}%' OR genero LIKE '%{$buscar}%' order by id desc";
	$datos = Conexion::consultar($sql);


}else{

	$sql ="SELECT * FROM peliculas order by id desc";
	$datos = Conexion::consultar($sql);

}

if (count($datos) == null) {
	echo "<br> <h3 class='white-text center'>Busqueda no encontrada :(</h3> <br>";
}

?>