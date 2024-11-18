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
                    <input type="number" name="data[no_control]" required="true" class="form-control" id="noControl" aria-describedby="noControlHelp">
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

<?php require('views/footer_home.php'); ?>