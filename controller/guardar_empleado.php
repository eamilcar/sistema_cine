<?php

include("../conexion/conexion.php");

$nom_add = @$_POST['nom_add'];
$correo_add = @$_POST['correo_add'];
$telefono_add = @$_POST['telefono_add'];
$cargo_add = @$_POST['cargo_add'];


$sql = "INSERT INTO empleado (nombre, correo, telefono,cargo) VALUES
		 ('".$nom_add."','".$correo_add."','".$telefono_add."','".$cargo_add."')";

$valid = Conexion::ejecutar($sql);

if ($valid) {
	// echo "good";
	header("Location: ../view/administrador/add_empleado.php?m=true");
}else{
	// echo "bad";
	header("Location: ../view/administrador/add_empleado.php?m=false");
}

?>