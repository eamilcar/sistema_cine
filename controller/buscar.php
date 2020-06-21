<?php
include("session.php");

if(isset($_SESSION['usuario'])){
    if ($_SESSION['usuario']['tipo_usuario'] == "admin"){
    	$buscar = $_POST['buscar'];
        header("Location: ../view/administrador/peliculas_session.php?buscar={$buscar}");

    }else if($_SESSION['usuario']['tipo_usuario'] == "user"){
        $buscar = $_POST['buscar'];
        header("Location: ../view/usuario/peliculas_session.php?buscar={$buscar}");

    }
}else{
	$buscar = $_POST['buscar'];
	header("Location: ../view/peliculas.php?buscar={$buscar}");
}
?>