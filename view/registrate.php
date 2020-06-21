<?php include("../controller/session.php"); ?>
<?php $page = 'registrate'; include("layout/header.php"); ?>

<div class="imagen_registrate" style="padding: 10px;">
<div class="container">
<center><img style="margin: 15px;" src="../img/logo/tucine.png" width="100" heigth="100" alt=""></center>
<div class="container grey lighten-5" style="padding: 0px 10px;">
     <div class="row">
    <form class="col l12 s12" method="post" action="javascript:registrar()" id="registrate">
    <h2 class="center">Registrate</h2>
      <div class="row center-aling">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="nombre_registrate" pattern="[A-Za-z0-9_-]{1,30}" minlength="1" maxlength="30" id="nombre_registrate" type="text" class="validate" title="Solo numeros y letras, desde la A-Z, a-z, _, - nada de caracteres especiales." required>
          <label for="nombre_registrate">Nombre</label>
          <div id="error_nombre" class="red white-text"></div>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input name="correo_registrate" minlength="1" maxlength="100" id="correo_registrate" type="email" class="validate" required>
          <label for="correo_registrate">Correo</label>
          <div id="error_correo" class="red white-text"></div>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">enhanced_encryption</i>
          <input name="contrasena_registrate" minlength="6" maxlength="25" id="contrasena_registrate" type="password" class="validate" pattern="[A-Za-z0-9_-]{6,25}" title="Solo numeros y letras, desde la A-Z, a-z, _, - nada de caracteres especiales." required>
          <label for="contrasena_registrate">Contraseña</label>
          <p class="blue-grey-text">Las contraseñas deben contener al menos seis caracteres.</p>
          <div id="error_contrasena" class="red white-text"></div>
        </div>
          <div class="input-field col s12">
          <i class="material-icons prefix">enhanced_encryption</i>
          <input name="contrasena_registrate_confirmar" minlength="6" maxlength="25" id="contrasena_registrate_confirmar" type="password" class="validate" pattern="[A-Za-z0-9_-]{6,25}" title="Solo numeros y letras, desde la A-Z, a-z, _, - nada de caracteres especiales." required>
          <label for="contrasena_registrate_confirmar">Confirmar Contraseña</label>
          <div id="error_confirmacion" class="orange darken-4 white-text center"></div>
        </div>
      </div>
      <center>
          <br>
          <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Registrar
          <i class="material-icons right">send</i>
          </button>
      </center>
      <br>
    </form>
  </div>  
  </div>
          <h5 class="white-text center">¿Ya tienes una cuenta?</h5>
   <center>
    <a class="btn tooltipped waves-effect orange accent-3" data-position="bottom" data-tooltip="Iniciar Sesión" href="iniciar_sesion.php">Inicia Sesión</a>
    </center>
    <br>
  </div>
</div>

<?php include("layout/footer.php") ?>