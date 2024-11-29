<?php require('views/header.php'); ?>
<center>
  <h1>Primero introduzca el numero de control del egresado aspirante a titulacion que desea modificar</h1>
</center>

<br>
<main>
  <br>
  <section class="formulario">
    <form action="egresado.php?accion=validar" method="POST">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <input type="text" name="data[no_control]" required class="form-control" id="noControl" maxlength="8" oninput="validarNoControl(this);">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <input type="submit" name="data[enviar]" required="true" class="btn btn-primary w-100" value="Verificar">
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </section>
</main>

<script>
  function validarNoControl(input) {
    input.value = input.value.replace(/\D/g, '');

    if (input.value.length > 8) {
      input.value = input.value.slice(0, 8);
    }
  }
</script>

<?php require('views/footer_home.php'); ?>
