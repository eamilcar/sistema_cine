<?php
include("../../controller/usuario_session.php");
include("../../conexion/conexion.php");
include("../../model/model_administrar.php");
include("../layout/header_sesion.php");
?> 
 
<br>
<h3 class="white-text center">Administración de boletos reservados</h3>
<div class="row">
    <div class="col s12" style="padding: 0;">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">Boletos</a></li>
         
        
      </ul>
    </div>

    <div id="test1" class="col s12" style="padding: 0;">
    	<div class="white">
			<table class="highlight">
				<thead>
       				<tr>
			            <th>ID</th>
			            <th>Nombre</th>
			            <th>numero boletos</th>
			            <th>precio</th>
				        <th>localidad</th>
				        <th>Fecha</th>
				        <th>Hora</th>
				        <th>Sala</th>
			         
			            <th>Opciones</th>
       				</tr>
   				</thead>

			<?php foreach($datos5 as $items){ ?>

		        <tbody>
		          <tr>
		            <td><?=$items['id_boletos'];?></td>
		            <td><?=$items['pelicula'];?></td>
		            <td><?=$items['boletos'];?></td>
		            <td><?=$items['precio'];?></td>
		            <td><?=$items['localidad'];?></td>
		            <td><?=$items['fecha'];?></td>
		            <td><?=$items['hora'];?></td>
		            <td><?=$items['sala'];?></td>
		         
		            <td class="">
		          		<a href="modificar_boletos.php?id_boletos=<?=$items['id_boletos']?>" class="btn blue darken-3 white-text">Editar</a>
		          		<br>
						  <br>
		            	<a href="../../controller/eliminar.php?id=<?=$items['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="btn red darken-3 white-text">Eliminar</a>
		            </td>
		          </tr>
		        </tbody>
			<?php } ?>

			</table>

			

		</div>
    </div>


<script type="text/javascript">


	function eliminar(id){
		if(confirm("Eliminar?") == true){
			return true;
		}else{
			return false;
		}
	}



	$(document).ready(function(){
    $('.tabs').tabs();
  });     
</script>
</div>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>