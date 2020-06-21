<?php

require_once("../conexion/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['titulo_add'];
$boletos = $_POST['boletos_add'];
$precio = $_POST['precio_add'];
$fecha = $_POST['fecha_add'];
$hora = $_POST['hora_add'];
$sala = $_POST['sala_add'];

$sql = "UPDATE boletos SET pelicula='$nombre', boletos='$boletos', precio='$precio',  fecha='$fecha', hora='$hora', sala='$sala' where id_boletos='$id'";
 


$valid = Conexion::ejecutar($sql);

if ($valid) {
	//echo "GOOD";
	header("location: ../view/administrador/boletos_reservados.php");
}else{
	//echo "BAD";
	header("location: ../view/administrador/modificar_boletos.php");
}

?>