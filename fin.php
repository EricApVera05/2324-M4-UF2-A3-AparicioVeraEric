<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
    <link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body class="bodyfin">
    <h1 class="h1fin">FELICIDADES</h1>
    <audio id="audio" autoplay loop>
        <source src="img/final_sound.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div>
        <button class="buttonfin" onclick="window.location.href = 'index.html';">Volver a Inicio</button>
    </div>
    <script>
        function volverInicio() {
            // Reiniciar variables de sesión
            <?php
            session_start(); // Inicia la sesión
            $_SESSION['preguntas_acertadas'] = 0; // Reinicia el contador de preguntas acertadas
            ?>
            
            // Redirigir a la página de inicio
            window.location.href = 'index.html';
        }
    </script>
</body>
</html>
