<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicidades</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 5em; /* Tamaño del texto grande */
            text-align: center;
            margin-top: 200px;
        }
        #audio {
            display: none; /* Para ocultar el reproductor de audio */
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>FELICIDADES</h1>
    <audio id="audio" autoplay loop>
        <source src="img/final_sound.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div>
        <button onclick="window.location.href = 'index.html';">Volver a Inicio</button>
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
