<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body class="bodyerror">
    <?php
        // Verifica si hay una referencia en la solicitud HTTP
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // Si no hay referencia, redirige al usuario a index.html
            header("Location: index.html");
            exit; // Termina el script para evitar que se ejecute más código
        }
    ?>
    <div class="container">
        <h1>Sabía que fallarias</h1>
        <div>
            <button onclick="window.location.href = 'pregunta.php';">Volver</button>
        </div>
        <script>
            function volverInicio() {
                // Reiniciar variables de sesión
                <?php
                session_start(); // Inicia la sesión
                $_SESSION['preguntas_acertadas'] = 0; // Reinicia el contador de preguntas acertadas
                ?>
                
                // Redirigir a la página de inicio
                window.location.href = 'pregunta.php';
            }
        </script>
    </div>
</body>
</html>
