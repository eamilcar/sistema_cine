<?php $page = 'contacto'; include("layout/header.php"); ?>

<div class="imagen_contacto" style="padding: 10px;">
<div class="container">
<center><img style="margin: 15px;" src="../img/logo/cs.png" alt=""></center>
<div class="container grey lighten-5" style="padding: 10px;">
  <center>
<h3 class="">Contactenos!</h3>
</center>
		 <div class="row">
    <form class="col l6 s12">
      <div class="row">
        <div class="input-field col s11">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s11">
          <i class="material-icons prefix">directions</i>
          <input id="icon_prefi" type="text" class="validate">
          <label for="icon_prefi">Direccion</label>
        </div>
        <div class="input-field col s11">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telefono</label>
        </div>
        <div class="input-field col s11">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s11">
          <i class="material-icons prefix">message</i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensaje</label>
        </div>
      </div>
    <center>
      <p><a id="ver" class="btn modal-trigger orange darken-4" href="#"><i class="material-icons right">send</i>Enviar</a></p>
    </center>
    </form>
    <br><br>
      <div class="col l6 s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.713417262685!2d-69.66484998560324!3d18.451316676105396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf7ff3f1653e37%3A0xc80c36909a523777!2sInstituto+Tecnol%C3%B3gico+de+Las+Am%C3%A9ricas+(ITLA)!5e0!3m2!1ses-419!2sdo!4v1558242416745!5m2!1ses-419!2sdo" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

  </div>

</div>
</div>
<br>
</div>

<?php include("layout/footer.php") ?>