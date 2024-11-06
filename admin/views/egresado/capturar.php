<?php require('views/header.php');?>
<center>
    <h1><?php if($accion=="capturar"):echo('Nueva');else: echo ('Modificar');endif; ?> solicitud de titulacion</h1>
</center>

<main>
    <section class="formulario">
      <form action="egresado.php?accion=nuevo" method="POST">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="noControl" class="form-label fw-bold">Numero de control:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[no_control]" class="form-control" id="noControl" aria-describedby="noControlHelp">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- nombre completo -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[nombre_completo]" class="form-control" id="nombre">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- especialidad -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="especialidad" class="form-label fw-bold">Especialidad:</label>
          </div>
          <div class="col-md-4">
            <select name="data[especialidad]" required="true" class="form-select" aria-label="Seleccion de la especialidad" id="especialidad">
              <option selected>Seleccione una opción</option>
              <option value="1">IINFO</option>
              <option value="2">LINFO</option>
              <option value="3">ISC</option>
            </select>
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- nombre del proyecto -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre_proyecto" class="form-label fw-bold">Nombre del proyecto:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[nombre_proyecto]" class="form-control" id="nombre_proyecto">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- opcion de titulacion -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="opcTitulacion" class="form-label fw-bold">Opción de titulación:</label>
          </div>
          <div class="col-md-4">
            <select name="data[opc_titulacion]" required="true" class="form-select" aria-label="Seleccion de la opción de titulación" id="opcTitulacion">
              <option selected>Seleccione una opción</option>
              <option value="1">I - tesis profesional</option>
              <option value="2">II - libros de texto o prototipos didacticos</option>
              <option value="3">III - proyecto de investigacion</option>
              <option value="4">IV - diseño o rediseño de equipo, aparato o maquinaria</option>
              <option value="5">V - cursos especiales de titulación</option>
              <option value="6">VI - examen global por areas de conocimiento</option>
              <option value="7">VII - memoria de experiencia profesional</option>
              <option value="8">VIII - escolaridad por promedio</option>
              <option value="9">IX - escolaridad por estudios de posgrado</option>
              <option value="10">X - memoria de residencia profesional</option>
              <option value="11">XIa - titulación integral</option>
              <option value="12">XIb - titulación integral</option>
              <option value="13">XIc - titulación integral</option>
              <option value="14">XId - titulación integral</option>
            </select>
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>>

        <!-- nombre del asesor -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre_asesor" class="form-label fw-bold">Nombre del asesor:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[asesor]" class="form-control" id="nombre_asesor">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- sinodal 1 -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre_sinodal1" class="form-label fw-bold">Sinodal 1:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[sinodal1]" class="form-control" id="nombre_sinodal1">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- sinodal 2 -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre_sinodal2" class="form-label fw-bold">Sinodal 2:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[sinodal2]" class="form-control" id="nombre_sinodal2">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- sinodal 3 -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="nombre_sinodal3" class="form-label fw-bold">Sinodal 3:</label>
          </div>
          <div class="col-md-4">
            <input type="text" name="data[sinodal3]" class="form-control" id="nombre_sinodal2">
          </div>
          <div class="col-md-2"></div>
        </div>
        <br>

        <!-- estatus -->
        <!-- integer -->
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
            <label for="estatus" class="form-label fw-bold">Estatus:</label>
          </div>
          <div class="col-md-4">
            <select name="data[status]" required="true" class="form-select" aria-label="Seleccion del estatus" id="estatus">
              <option selected>Seleccione una opción</option>
              <option value="1">1 realizando oficio de aprobacion</option>
              <option value="2">2 oficio de aprobacion entregado</option>
              <option value="3">3 oficio de NO INCONVENIENCIA recibido</option>
              <option value="4">4 realizando oficio de AVISO DE ACTO RECEPCIONAL</option>
              <option value="5">5 envio de AVISO DE ACTO RECEPCIONAL a egresado y jurado</option>
              <option value="6">6 titulado</option>
            </select>
          </div>
          <div class="col-md-2"></div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="submit" name="data[enviar]" class="btn btn-primary w-100" value="Capturar">
            </div>
            <div class="col-md-4"></div>
        </div>
      </form>
    </section>
  </main>

<?php require('views/footer_home.php');?>