<?php

require_once("../../conexion/conexion.php");
 
$id = $_GET["id_boletos"];

$sql = "SELECT * FROM boletos WHERE id_boletos =" .$id;

$datos5 = Conexion::consultar($sql);
  
foreach ($datos5 as $items) {
}

?>

<?php 
include("../../controller/administrador_session.php");
include("../../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<div class="container">
  <h2 class="white-text center">Modificar boletos</h2>
  <br>
  <div class="row white">
    <br>
    <form class="col s12" method="post" action="../../model/model_modificar_boleto.php?id=<?=$items['id_boletos'];?>" enctype="multipart/form-data" id="id_boletos" name="id_boletos">


    
      <div class="row">
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">title</i>
          <input   type="text" class="validate" value="<?php echo $items['pelicula']; ?>" required="">
         <label for="titulo_add">Titulo:</label>
          <select id="titulo_add" name="titulo_add">
        <option value="0">Seleccione pelicula disponible:</option>

        <?php
          $query = $mysqli -> query ("SELECT * FROM peliculas");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre].'">'.$valores[nombre].'</option>';
          }
        ?>
      </select>
     </div>
        
        <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input id="boletos_add" name="boletos_add" type="text" class="validate" value="<?php echo $items['boletos'];?>" required="">
          <label for="boletos_add">Boletos:</label>
        </div>

    <div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input id="precio_add" name="precio_add" type="text" class="validate" value="<?php echo $items['precio'];?>" required=""></input>
          <label for="precio_add">precio:</label>
        </div>
        

         <div class="input-field col s12 l12">
          <i class="material-icons prefix">live_tv</i>
          <input  type="text" class="validate" value="<?php echo $items['fecha'];?>" required="">

          <input id="fecha_add" name="fecha_add" type="date" class="validate"  min="2020-06-15">
          <label for="fecha_add">Fecha:</label>
        </div>

    <div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input type="text" class="validate" value="<?php echo $items['hora'];?>" ></input>
          <select id="hora_add" name="hora_add">
        <option value="0">Seleccione hora disponible:</option>

        <?php
          $query = $mysqli -> query ("SELECT * FROM cartelera");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[idcartelera].'">'.$valores[hora_inicio].'</option>';
          }
        ?>
      </select>
          <label for="hora_add">Hora:</label>
        </div>

        <div class="input-field col s12 l12">
          <i class="material-icons prefix">info</i>
          <input  type="text" class="validate" value="<?php echo $items['sala'];?>" ></input>
           <select id="sala_add" name="sala_add">
        <option value="0">Seleccione sala disponible:</option>

        <?php
          $query = $mysqli -> query ("SELECT * FROM sala");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[nombre_sala].'">'.$valores[nombre_sala].'</option>';
          }
        ?>
      </select>
          <label for="sala_add" required="">Sala:</label>
        </div>
  
      </div>
      <br>
        <center><button class="btn waves-effect waves-light green darken-1 btn-large" type="submit" name="action">Actualizar
        <i class="material-icons right">send</i>
      </button></center>

      
    <br><br>
    </form>
  </div>
</div>



<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>