<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pre-preguntas</title>
    <style>
        body {
            background-image: url('./img/imagen1.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center; 
            background-attachment: fixed; 
            margin: 0; 
            padding: 0; 
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100vh;
			flex-direction: column;
        }

        .question-container {
            background-color: #ccc; /* Color de fondo gris */
            padding: 20px;
            border-radius: 10px;
        }

        .question {
            margin-top: 20px;
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
            display: none; /* Botón inicialmente oculto */
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
        // Verifica si hay una referencia en la solicitud HTTP
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // Si no hay referencia, redirige al usuario a index.html
            header("Location: index.html");
            exit; // Termina el script para evitar que se ejecute más código
        }
    ?>
    <div class="question-container">
        <script>
            // Textos a mostrar y preguntas
            const texts = [
                "Veo que has despertado, te preguntarás que haces atado.",
                "No te asustes, estas aquí por una razón por la cual te apuntaste, aprender informatica",
                "Te iré mostrando preguntas las cuales tendrás que responder para continuar en el centro, en caso de que no sea así, recibirás una penitencia."
            ];

            // Función para cambiar el texto del cuerpo
            function changeText(index) {
                document.querySelector('.question-container').innerHTML = texts[index];
                if (index < texts.length - 1) {
                    setTimeout(() => changeText(index + 1), 8000); // Cambia el texto cada 9 segundos
                } else {
                    setTimeout(() => {
                        document.querySelector('button').style.display = 'block'; // Mostrar botón después del último texto
                    }, 5000);
                }
            }
            // Iniciar el proceso de cambio de texto
            changeText(0);
        </script>
    </div>
    <div>
        <button onclick="window.location.href = 'preguntas.php';">Ir a Preguntas</button>
    </div>
</body>
</html>
