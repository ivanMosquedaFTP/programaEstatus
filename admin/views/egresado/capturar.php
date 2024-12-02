<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('views/headerWithoutJumbotron.php');
?>
<center>
  <h1>Nueva solicitud de titulación</h1>
</center>
<br>

<main>
  <section class="formulario">
    <form action="egresado.php?accion=nuevo" method="POST" onsubmit="return validarFormulario();">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="noControl" class="form-label fw-bold">Número de control:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[no_control]" required class="form-control" id="noControl" maxlength="8" oninput="validarNoControl(this);">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Nombre completo -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[nombre_completo]" required="true" class="form-control" id="nombre" maxlength="100">
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
            <option selected>Seleccione una opción</option>
            <option value="1">IINFO</option>
            <option value="2">LINFO</option>
            <option value="3">ISC</option>
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
          <input type="text" name="data[nombre_proyecto]" required="true" class="form-control" id="nombre_proyecto" maxlength="100">
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
            <option selected>Seleccione una opción</option>
            <option value="1">I - Tesis profesional</option>
            <option value="2">II - Prototipos didácticos</option>
            <option value="3">III - Proyecto de investigación</option>
            <option value="4">IV - Diseño de equipos</option>
            <option value="5">V - Cursos especiales</option>
            <option value="6">VI - Examen global</option>
            <option value="7">VII - Memoria profesional</option>
            <option value="8">VIII - Escolaridad por promedio</option>
            <option value="9">IX - Escolaridad por estudios de posgrado</option>
            <option value="10">X - Memoria de residencia profesional</option>
            <option value="11">XIa - Titulacion integral</option>
            <option value="12">XIb - Proyecto</option>
            <option value="13">XIc - Residencias</option>
            <option value="14">XId - Ceneval</option>
          </select>

        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Nombre del asesor -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre_asesor" class="form-label fw-bold">Nombre del asesor:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[asesor]" required="true" class="form-control" id="nombre_asesor" maxlength="100">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Sinodal 1 -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre_sinodal1" class="form-label fw-bold">Sinodal 1:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[sinodal1]" required="true" class="form-control" id="nombre_sinodal1" maxlength="100">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Sinodal 2 -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre_sinodal2" class="form-label fw-bold">Sinodal 2:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[sinodal2]" required="true" class="form-control" id="nombre_sinodal2" maxlength="100">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Sinodal 3 -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="nombre_sinodal3" class="form-label fw-bold">Sinodal 3:</label>
        </div>
        <div class="col-md-2">
          <input type="text" name="data[sinodal3]" required="true" class="form-control" id="nombre_sinodal3" maxlength="100">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Estatus -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="estatus" class="form-label fw-bold">Estatus:</label>
        </div>
        <div class="col-md-2">
          <select name="data[status]" required="true" class="form-select" id="estatus" onchange="toggleFechaExamen();">
            <option selected>Seleccione una opción</option>
            <option value="0">0 - En espera de documentos</option>
            <option value="1">1 - Realizando oficio de aprobavacion</option>
            <option value="2">2 - Oficio de aprovacion entregado</option>
            <option value="3">3 - Oficio de no inconvenencia recibido</option>
            <option value="4">4 - Realizando oficio de aviso de acto recepcional</option>
            <option value="5">5 - Envio de aviso de acto recepcional a egresado</option>
            <option value="6">6 - Titulado</option>
          </select>
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <!-- Fecha de examen (opcional) -->
      <div class="row" id="fechaExamenRow" style="display: none;">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <label for="fecha_examen" class="form-label fw-bold">Fecha de examen:</label>
        </div>
        <div class="col-md-2">
          <input type="date" name="data[fecha_examen]" class="form-control" id="fecha_examen">
        </div>
        <div class="col-md-4"></div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <input type="submit" name="data[enviar]" required="true" class="btn btn-primary w-100" value="Capturar">
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </section>
</main>

<script>
  function validarFormulario() {
    const sinodal1 = document.getElementById('nombre_sinodal1').value.trim();
    const sinodal2 = document.getElementById('nombre_sinodal2').value.trim();
    const sinodal3 = document.getElementById('nombre_sinodal3').value.trim();
    const estatus = document.getElementById('estatus').value;
    const fechaExamen = document.getElementById('fecha_examen').value;

    if ((sinodal1 && sinodal1 === sinodal2) ||
      (sinodal1 && sinodal1 === sinodal3) ||
      (sinodal2 && sinodal2 === sinodal3)) {
      alert("Los nombres de los sinodales no deben repetirse.");
      return false;
    }

    if (estatus >= 3 && !fechaExamen) {
      alert("Debe capturar la fecha de examen si el estatus es igual o mayor a 3.");
      return false;
    }
    return true;
  }

  function validarNoControl(input) {
    input.value = input.value.replace(/\D/g, '');

    if (input.value.length > 8) {
      input.value = input.value.slice(0, 8);
    }
  }

  function toggleFechaExamen() {
    const estatus = parseInt(document.getElementById('estatus').value);
    const fechaExamenRow = document.getElementById('fechaExamenRow');
    if (estatus >= 3) {
      fechaExamenRow.style.display = "flex";
    } else {
      fechaExamenRow.style.display = "none";
    }
  }
</script>

<?php require('views/footer_home.php'); ?>
