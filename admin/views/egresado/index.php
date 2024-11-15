  <?php require('views/header.php');?>
  <main>
    <section>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-primary btn-lg w-100" href="egresado.php?accion=capturar">Capturar datos de egresado.</a>
          <br> <br>
          <a class="btn btn-primary btn-lg w-100" href="egresado.php?accion=premodificacion">Modificar información de un egresado.</a>
          <br> <br>
          <a class="btn btn-primary btn-lg w-100" href="consultarEstatus.php">Consulta por estatus.</a>
          <br> <br>
          <a class="btn btn-primary btn-lg w-100" href="consultarOpc.php">Consulta por opción de titulación.</a>
          <br> <br>
          <a class="btn btn-primary btn-lg w-100" href="consultarPorNoControl.php">Consulta por número de control.</a>
        </div>
        <div class="col-md-4"></div>
      </div>
    </section>
  </main>
<?php require('views/footer.php');?>