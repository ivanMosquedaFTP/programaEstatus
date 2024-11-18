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
        <form action="modificar_formulario.php" method="POST" onsubmit="return validarFormulario();">
            <input type="hidden" name="data[no_control]" value="<?php echo $egresados['no_control']; ?>">

            <!-- Nombre completo -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[nombre_completo]" required="true" class="form-control" id="nombre" value="<?php if(isset($egresados['nombre_completo'])):echo($egresados['nombre_completo']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Especialidad -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="especialidad" class="form-label fw-bold">Especialidad:</label>
                </div>
                <div class="col-md-4">
                    <select name="data[especialidad]" required="true" class="form-select" id="especialidad">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">IINFO</option>
                        <option value="2">LINFO</option>
                        <option value="3">ISC</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Nombre del proyecto -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_proyecto" class="form-label fw-bold">Nombre del proyecto:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[nombre_proyecto]" required="true" class="form-control" id="nombre_proyecto" value="<?php if(isset($egresados['nombre_proyecto'])):echo($egresados['nombre_proyecto']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Opción de titulación -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="opcTitulacion" class="form-label fw-bold">Opción de titulación:</label>
                </div>
                <div class="col-md-4">
                    <select name="data[opc_titulacion]" required="true" class="form-select" id="opcTitulacion">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">I - Tesis profesional</option>
                        <option value="2">II - Libros de texto o prototipos didácticos</option>
                        <option value="3">III - Proyecto de investigación</option>
                        <option value="4">IV - Diseño o rediseño de equipo, aparato o maquinaria</option>
                        <option value="5">V - Cursos especiales de titulación</option>
                        <option value="6">VI - Examen global por áreas de conocimiento</option>
                        <option value="7">VII - Memoria de experiencia profesional</option>
                        <option value="8">VIII - Escolaridad por promedio</option>
                        <option value="9">IX - Escolaridad por estudios de posgrado</option>
                        <option value="10">X - Memoria de residencia profesional</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Sinodales -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_sinodal1" class="form-label fw-bold">Sinodal 1:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[sinodal1]" required="true" class="form-control" id="nombre_sinodal1" value="<?php if(isset($egresados['sinodal1'])):echo($egresados['sinodal1']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_sinodal2" class="form-label fw-bold">Sinodal 2:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[sinodal2]" required="true" class="form-control" id="nombre_sinodal2" value="<?php if(isset($egresados['sinodal2'])):echo($egresados['sinodal2']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_sinodal3" class="form-label fw-bold">Sinodal 3:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[sinodal3]" required="true" class="form-control" id="nombre_sinodal3" value="<?php if(isset($egresados['sinodal3'])):echo($egresados['sinodal3']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Estatus -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="estatus" class="form-label fw-bold">Estatus:</label>
                </div>
                <div class="col-md-4">
                    <select name="data[status]" required="true" class="form-select" id="estatus" onchange="toggleFechaExamen();">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">1 - Realizando oficio de aprobación</option>
                        <option value="2">2 - Oficio de aprobación entregado</option>
                        <option value="3">3 - Oficio de NO INCONVENIENCIA recibido</option>
                        <option value="4">4 - Realizando oficio de AVISO DE ACTO RECEPCIONAL</option>
                        <option value="5">5 - Envío de AVISO DE ACTO RECEPCIONAL a egresado y jurado</option>
                        <option value="6">6 - Titulado</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
            </div>
            <br>

            <!-- Fecha de examen -->
            <div class="row" id="fechaExamenRow" style="display: none;">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="fecha_examen" class="form-label fw-bold">Fecha de examen:</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="data[fecha_examen]" class="form-control" id="fecha_examen" value="<?php if(isset($egresados['fecha_examen'])):echo($egresados['fecha_examen']);endif; ?>">
                </div>
                <div class="col-md-2"></div>
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
    function validarFormulario() {
        const estatus = parseInt(document.getElementById('estatus').value.trim());
        const fechaExamen = document.getElementById('fecha_examen').value.trim();

        if (estatus >= 3 && !fechaExamen) {
            alert("Debe capturar la fecha de examen si el estatus es igual o mayor a 3.");
            return false;
        }
        return validarSinodales();
    }

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

    document.getElementById('estatus').addEventListener('change', toggleFechaExamen);

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
