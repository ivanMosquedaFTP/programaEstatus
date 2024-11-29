<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página en Construcción</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            position: relative;
        }

        .volver {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #fff;
            color: #66a6ff;
            border: none;
            padding: 10px 15px;
            font-size: 1em;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }

        .volver:hover {
            background-color: #66a6ff;
            color: #fff;
        }

        .container {
            text-align: center;
            padding: 20px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 2.5em;
            color: #000;
            /* Cambiado a negro */
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
            /* Ajuste de sombra */
        }

        p {
            color: #000;
            /* Cambiado a negro */
            font-size: 1.2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.2);
            /* Ajuste de sombra */
        }

        .loader {
            border: 8px solid rgba(255, 255, 255, 0.3);
            border-top: 8px solid #000;
            /* Cambiado a negro */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .note {
            margin-top: 20px;
            color: #000;
            /* Cambiado a negro */
            font-size: 1em;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <a href="index.php" class="volver">Volver a inicio</a>
    <div class="container">
        <h1>Página en Construcción</h1>
        <p>Estamos trabajando en algo increíble. ¡Vuelve pronto!</p>
        <div class="loader"></div>
        <div class="note">Gracias por tu paciencia</div>
    </div>
</body>

</html>