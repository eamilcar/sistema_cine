  <div class="fixed-action-btn">
  <a class="btn-floating btn-large orange darken-2 pulse">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a href="administrar.php" class="btn-floating purple"><i class="material-icons">contacts</i></a></li>
    <li><a href="add_pelicula.php" class="btn-floating blue"><i class="material-icons">cloud_upload</i></a></li>
    <li><a href="add_ticket.php" class="btn-floating green"><i class="fa fa-ticket">add</i></a></li>
     <li><a href="boletos_reservados.php" class="btn-floating green"><i class="fa fa-ticket">add</i></a></li>
      
  </ul>
  <a href="add_empleado.php" class="btn-floating btn-large green darken-2 pulse">
   <i class="material-icons">contacts</i>
  </a>
  
</div>


<!--BOTOM FLOTANTE JS-->
<script type="text/javascript">
$(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });

//options select
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>