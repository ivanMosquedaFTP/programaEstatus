<?php
require('views/headerWithoutJumbotron.php');
?>

<center>
  <h1>Modificar solicitud de titulación</h1>
</center>
<br> <br>
<main>
  <section class="formulario">
    <?php if (isset($_GET['error']) && $_GET['error'] === 'sinodales_repetidos'): ?>
      <p style="color: red; text-align: center;">Error: Los nombres de los sinodales no deben repetirse.</p>
    <?php endif; ?>
    <form action="egresado.php?accion=modificar" method="POST" onsubmit="return validarFormulario();">
      <input type="hidden" name="data[no_control]" value="<?php echo $egresados['no_control']; ?>">

      <!-- Nombre completo -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[nombre_completo]" required="true" class="form-control" id="nombre" maxlength="100" value="<?php echo isset($egresados['nombre_completo']) ? $egresados['nombre_completo'] : ''; ?>">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Especialidad -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="especialidad" class="form-label fw-bold">Especialidad:</label>
        </div>
        <div class="col-md-2">
          <select name="data[especialidad]" required="true" class="form-select" id="especialidad">
            <option value="" selected>Seleccione una opción</option>
            <option value="1" <?php echo ($egresados['especialidad'] == "IINFO") ? 'selected' : ''; ?>>IINFO</option>
            <option value="2" <?php echo ($egresados['especialidad'] == "LINFO") ? 'selected' : ''; ?>>LINFO</option>
            <option value="3" <?php echo ($egresados['especialidad'] == "ISC") ? 'selected' : ''; ?>>ISC</option>
          </select>
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Nombre del proyecto -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre_proyecto" class="form-label fw-bold">Nombre del proyecto:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[nombre_proyecto]" required="true" class="form-control" id="nombre_proyecto" maxlength="100" value="<?php echo isset($egresados['nombre_proyecto']) ? $egresados['nombre_proyecto'] : ''; ?>">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Opción de titulación -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="opcTitulacion" class="form-label fw-bold">Opción de titulación:</label>
        </div>
        <div class="col-md-2">
          <select name="data[opc_titulacion]" required="true" class="form-select" id="opcTitulacion">
            <option value="" <?php echo (!isset($egresados['opc_titulacion']) || $egresados['opc_titulacion'] == "") ? 'selected' : ''; ?>>Seleccione una opción</option>
            <?php
            $titOptions = [
              1 => "I - Tesis profesional",
              2 => "II - Prototipos didácticos",
              3 => "III - Proyecto de investigación",
              4 => "IV - Diseño de equipos",
              5 => "V - Cursos especiales",
              6 => "VI - Examen global",
              7 => "VII - Memoria profesional",
              8 => "VIII - Escolaridad por promedio",
              9 => "IX - Escolaridad por estudios de posgrado",
              10 => "X - Memoria de residencia profesional",
              11 => "XIa - Titulación integral",
              12 => "XIb - Proyecto",
              13 => "XIc - Residencias",
              14 => "XId - Ceneval"
            ];

            $romanToInteger = [
              "I" => 1,
              "II" => 2,
              "III" => 3,
              "IV" => 4,
              "V" => 5,
              "VI" => 6,
              "VII" => 7,
              "VIII" => 8,
              "IX" => 9,
              "X" => 10,
              "XIa" => 11,
              "XIb" => 12,
              "XIc" => 13,
              "XId" => 14
            ];
            $currentOption = isset($egresados['opc_titulacion']) ? $romanToInteger[$egresados['opc_titulacion']] : "";

            foreach ($titOptions as $key => $label) {
              $selected = ($currentOption == $key) ? 'selected' : '';
              echo "<option value='$key' $selected>$label</option>";
            }
            ?>
          </select>
        </div>
        <div class="col-md-4"></div>
      </div>

      <br>
      <!-- Nombre del asesor -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="asesor" class="form-label fw-bold">Nombre del asesor:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[asesor]" required="true" class="form-control" id="asesor" maxlength="100" value="<?php echo isset($egresados['asesor']) ? $egresados['asesor'] : ''; ?>">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Sinodales -->
      <?php
      $sinodales = ['sinodal1', 'sinodal2', 'sinodal3'];
      foreach ($sinodales as $index => $sinodal) {
        $label = "Sinodal " . ($index + 1);
      ?>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <label for="nombre_<?php echo $sinodal; ?>" class="form-label fw-bold"><?php echo $label; ?>:</label>
          </div>
          <div class="col-md-2">
            <input type="text" name="data[<?php echo $sinodal; ?>]" required="true" class="form-control" maxlength="100" id="nombre_<?php echo $sinodal; ?>" value="<?php echo isset($egresados[$sinodal]) ? $egresados[$sinodal] : ''; ?>">
          </div>
          <div class="col-md-4"></div>
        </div>
        <br>
      <?php
      }
      ?>

      <!-- Estatus -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="estatus" class="form-label fw-bold">Estatus:</label>
        </div>
        <div class="col-md-2">
          <select name="data[status]" required="true" class="form-select" id="estatus" onchange="toggleFechaExamen();">
            <option value="" selected>Seleccione una opción</option>
            <?php for ($i = 1; $i <= 6; $i++) {
              $selected = ($egresados['status'] == $i) ? 'selected' : '';
              echo "<option value='$i' $selected>$i</option>";
            } ?>
          </select>
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Fecha de examen -->
      <div class="row" id="fechaExamenRow" style="display: none;">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="fecha_examen" class="form-label fw-bold">Fecha de examen:</label>
        </div>
        <div class="col-md-2">
          <input type="date" name="data[fecha_examen]" class="form-control" id="fecha_examen" value="<?php echo isset($egresados['fecha_examen']) ? $egresados['fecha_examen'] : ''; ?>">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <input type="submit" name="data[enviar]" required="true" class="btn btn-primary w-100" value="Modificar">
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </section>
</main>

<script>
  function toggleFechaExamen() {
    const estatus = parseInt(document.getElementById('estatus').value.trim());
    const fechaExamenRow = document.getElementById('fechaExamenRow');
    if (estatus >= 3) {
      fechaExamenRow.style.display = "flex";
    } else {
      fechaExamenRow.style.display = "none";
      document.getElementById('fecha_examen').value = "";
    }
  }

  window.onload = toggleFechaExamen;

  function validarFormulario() {
    const estatus = parseInt(document.getElementById('estatus').value.trim());
    const fechaExamen = document.getElementById('fecha_examen').value.trim();

    if (estatus >= 3 && !fechaExamen) {
      alert("Debe capturar la fecha de examen si el estatus es igual o mayor a 3.");
      return false;
    }
    return validarSinodales();
  }

  function validarSinodales() {
    const sinodal1 = document.getElementById('nombre_sinodal1').value.trim();
    const sinodal2 = document.getElementById('nombre_sinodal2').value.trim();
    const sinodal3 = document.getElementById('nombre_sinodal3').value.trim();

    if ((sinodal1 && sinodal1 === sinodal2) ||
      (sinodal1 && sinodal1 === sinodal3) ||
      (sinodal2 && sinodal2 === sinodal3)) {
      alert("Los nombres de los sinodales no deben repetirse.");
      return false;
    }
    return true;
  }
</script>

<?php require('views/footer_home.php'); ?>
