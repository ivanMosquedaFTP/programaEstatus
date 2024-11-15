<?php require('views/header.php'); ?>
<center>
    <h1>Modificar solicitud de titulación</h1>
</center>

<main>
    <section class="formulario">
        <form action="egresado.php?accion=modificar" method="POST" onsubmit="return validarSinodales();">
            <input type="hidden" name="data[no_control]" value="<?php echo $egresados['no_control']; ?>">
            <!-- nombre completo -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[nombre_completo]" required="true" class="form-control" id="nombre" value="<?php if(isset($egresados["nombre_completo"])):echo($egresados['nombre_completo']);endif; ?>">
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

            <!-- nombre del proyecto -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_proyecto" class="form-label fw-bold">Nombre del proyecto:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[nombre_proyecto]" required="true" class="form-control" id="nombre_proyecto" value="<?php if(isset($egresados["nombre_proyecto"])):echo($egresados['nombre_proyecto']);endif; ?>">
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
                    <select name="data[opc_titulacion]" required="true" class="form-select" id="opcTitulacion">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">I - tesis profesional</option>
                        <option value="2">II - libros de texto o prototipos didácticos</option>
                        <option value="3">III - proyecto de investigación</option>
                        <option value="4">IV - diseño o rediseño de equipo, aparato o maquinaria</option>
                        <option value="5">V - cursos especiales de titulación</option>
                        <option value="6">VI - examen global por áreas de conocimiento</option>
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
            <br>

            <!-- nombre del asesor -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="nombre_asesor" class="form-label fw-bold">Nombre del asesor:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[asesor]" required="true" class="form-control" id="nombre_asesor" value="<?php if(isset($egresados["asesor"])):echo($egresados['asesor']);endif; ?>">
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
                <input type="text" name="data[sinodal1]" required="true" class="form-control" id="nombre_sinodal1" value="<?php if(isset($egresados["sinodal1"])):echo($egresados['sinodal1']);endif; ?>">
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
                <input type="text" name="data[sinodal2]" required="true" class="form-control" id="nombre_sinodal2" value="<?php if(isset($egresados["sinodal2"])):echo($egresados['sinodal2']);endif; ?>">
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
                <input type="text" name="data[sinodal3]" required="true" class="form-control" id="nombre_sinodal3" value="<?php if(isset($egresados["sinodal3"])):echo($egresados['sinodal3']);endif; ?>">
            </div>
            <div class="col-md-2"></div>
            </div>
            <br>

            <!-- estatus -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <label for="estatus" class="form-label fw-bold">Estatus:</label>
                </div>
                <div class="col-md-4">
                    <select name="data[status]" required="true" class="form-select" id="estatus">
                        <option value="" selected>Seleccione una opción</option>
                        <option value="1">1 - realizando oficio de aprobación</option>
                        <option value="2">2 - oficio de aprobación entregado</option>
                        <option value="3">3 - oficio de NO INCONVENIENCIA recibido</option>
                        <option value="4">4 - realizando oficio de AVISO DE ACTO RECEPCIONAL</option>
                        <option value="5">5 - envío de AVISO DE ACTO RECEPCIONAL a egresado y jurado</option>
                        <option value="6">6 - titulado</option>
                    </select>
                </div>
                <div class="col-md-2"></div>
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