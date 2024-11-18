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
                    <input type="number" name="data[status]" required="true" class="form-control" id="status" aria-describedby="statusHelp" min="0" max="6">
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type="submit" name="data[enviar]" required="true" class="btn btn-primary w-100" value="Consultar">
                </div>
                <div class="col-md-4"></div>
            </div>
        </form>
    </section>
</main>

<?php require('views/footer_home.php'); ?>