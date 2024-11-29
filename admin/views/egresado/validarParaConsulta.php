<?php require('views/header.php'); ?>
<center>
  <h1>Primero introduzca el estatus que desea consultar.</h1>
</center>

<br>
<main>
  <br>
  <section class="formulario">
    <form action="egresado.php?accion=consultaPorStatus" method="POST">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <select name="data[status]" required class="form-control" id="status">
            <?php
            $statusDescriptions = [
              0 => "En espera de documentos",
              1 => "Realizando oficio de aprobavacion",
              2 => "Oficio de aprovacion entregado",
              3 => "Oficio de no inconvenencia recibido",
              4 => "Realizando oficio de aviso de acto recepcional",
              5 => "Envio de aviso de acto recepcional a egresado",
              6 => "Titulado"
            ];

            foreach ($statusDescriptions as $status => $description) {
              $selected = isset($data['status']) && $data['status'] == $status ? "selected" : "";
              echo "<option value=\"$status\" $selected>$status.- $description</option>";
            }
            ?>
          </select>
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <input type="submit" name="data[enviar]" class="btn btn-primary w-100" value="Consultar">
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </section>
</main>

<?php require('views/footer_home.php'); ?>
