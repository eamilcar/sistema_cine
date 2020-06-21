
<?php include("../../controller/administrador_session.php"); ?>

<?php include("../layout/header_sesion.php"); ?>
<?php  $mysqli = new mysqli('localhost', 'root', '', 'cine_je'); ?>
 
<br>
<div class="container">
	<h2 class="white-text center">AGREGAR BOLETOS</h2>
	<br>
      
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../controller/new_ticket.php" enctype="multipart/form-data" id="add_ticket">
      <div class="row">
        
          
        </div>

        <div class="input-field col s12 l6">
             
           
      <select  id="name_pelicula" name="name_pelicula" >
        <option value="0">Seleccione Pelicula:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM peliculas");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
      </select>
        </div>
        
          <div class="input-field col s12 l6">
          <i class="material-icons prefix">info</i>
          <input id="boletos_add" name="boletos_add"  class="materialize-textarea" type="number" class="validate" required="">
          <label for="boletos_add">Numero de Boletos:</label>

        </div>

        <div class="input-field col s12 l6" >
          <i class="material-icons prefix">info</i>
         <input id="fecha_add" name="fecha_add" type="date" class="validate" required="" min="2020-06-18">
          <label for="fecha_add">Seleccione Fecha de su Pelicula:</label>
        </div>

        <div class="input-field col s12 l6">
          <i class="material-icons prefix">info</i>
        
          <select id="hora_add" name="hora_add">
        <option value="0">Seleccione hora disponible:</option>

        <?php
          $query = $mysqli -> query ("SELECT * FROM cartelera");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[hora_inicio].'">'.$valores[hora_inicio].'</option>';
          }
        ?>
      </select>
        </div>

          <div class="input-field col s12 l6" >

      <select id="sala_add" name="sala_add">
        <option value="0">Seleccione sala disponible:</option>

        <?php
          $query = $mysqli -> query ("SELECT * FROM sala");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre_sala].'">'.$valores[nombre_sala].'</option>';
          }
        ?>
      </select>
        </div>

         


		
        
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
      echo "<script>alert('Guardado Correctamente')</script>";  
    }else{
    echo "<script>alert('Error al guardar, esto puede ser debido a algun dato faltante.')</script>";
    }
  }
  ?>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>