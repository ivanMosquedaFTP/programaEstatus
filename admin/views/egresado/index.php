<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Titulacion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5 jumbotron">
        <h1 class="display-5 fw-bold">Bienvenido al sistema de consulta de titulaciones</h1>
        <p class="col-md-8 fs-4">Este sistema permite la gestión de egresados aspirantes a titulación</p>
      </div>
    </div>
  </header>

  <main>
    <section>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <a class="btn btn-primary btn-lg w-100" href="egresado.php?accion=capturar">Capturar datos de egresado.</a>
          <br> <br>
          <a class="btn btn-primary btn-lg w-100" href="modificar.php">Modificar información de un egresado.</a>
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
</body>

</html>