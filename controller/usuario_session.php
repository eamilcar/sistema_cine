<?php

session_start();

if (isset($_SESSION['usuario'])){
	if ($_SESSION['usuario']['tipo_usuario'] != "user"){
		header('Location: ../administrador/peliculas_session.php');
	}
}else{
	header('Location: ../iniciar_sesion.php');
}

?>