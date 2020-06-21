<?php include("../../controller/administrador_session.php"); ?>
<?php include("../layout/header_sesion.php"); ?>

<br>
<div class="container">
	<h2 class="white-text center">Agregar empleado</h2>
	<br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../controller/guardar_empleado.php" enctype="multipart/form-data" id="add_empleado">
      <div class="row">
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">title</i>
          <input id="nom_add" name="nom_add" type="text" class="validate" required="">
          <label for="nom_add">Nombre</label>
        </div>
        <div class="input-field col s12 l6">
          <i class="material-icons prefix">contact_mail</i>
          <input id="correo_add" name="correo_add" type="text" class="validate" required="">
          <label for="correo_add">Correo</label>
        </div>
		<div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <textarea id="telefono_add" name="telefono_add" class="materialize-textarea" required=""></textarea>
          <label for="telefono_add">Telefono</label>
        </div>
         <div class="input-field col s12 l12">
          <i class="material-icons prefix">account_circle</i>
          <textarea id="cargo_add" name="cargo_add" class="materialize-textarea" required=""></textarea>
          <label for="cargo_add">Cargo</label>
        </div>
      <br>
       	<center><button class="btn waves-effect waves-light blue darken-4 btn-large" type="submit" name="action">Agregar
    		<i class="material-icons right">send</i>
  		</button></center>
		<br><br>
    </form>
  </div>
</div>

<?php 
  if(isset($_GET['m'])){
    if ($_GET['m'] == "true") {
      echo "<script>alert('Empleado guardado correctamente')</script>";
    }else{
    echo "<script>alert('Error al guardar.')</script>";
        
    }
  }
  ?>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>