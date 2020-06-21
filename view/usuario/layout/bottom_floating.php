  <div class="fixed-action-btn">
  <a class="btn-floating btn-large orange darken-2 pulse">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
   
    <li><a href="add_ticket_user.php" class="btn-floating green"><i class="fa fa-ticket">add</i></a></li>
    
  </ul>
 
  
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