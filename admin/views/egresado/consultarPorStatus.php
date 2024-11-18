<?php 
    require('views/headerWithoutJumbotron.php');
?>

<main>
  <section class="tablaContenidos">
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-10">
        <br><br>
        <table class="table table-striped" id="tblEstatus">
          <thead>
            <tr>
              <th scope="col">no. Control</th>
              <th scope="col">Nombre</th>
              <th scope="col">Especialidad</th>
              <th scope="col">Nombre de proyecto</th>
              <th scope="col">Opc. Titulación</th>
              <th scope="col">Estatus</th>
              <th scope="col">Fecha de examen de titulación</th>
              <th scope="col">Asesor</th>
              <th scope="col">Sinodal 1</th>
              <th scope="col">Sinodal 2</th>
              <th scope="col">Sinodal 3</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($egresados) {
                foreach ($egresados as $egresado) {
                    echo "<tr>";
                    echo "<th scope='row'>" . htmlspecialchars($egresado['no_control']) . "</th>";
                    echo "<td>" . htmlspecialchars($egresado['nombre_completo']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['especialidad']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['nombre_proyecto']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['opc_titulacion']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['status']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['fecha_examen']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['asesor']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['sinodal1']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['sinodal2']) . "</td>";
                    echo "<td>" . htmlspecialchars($egresado['sinodal3']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No hay datos disponibles</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</main>

<?php require('views/footer_home.php'); ?>