<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none; /* Botón inicialmente oculto */
        }
    </style>
</head>
<body>
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
                    setTimeout(() => changeText(index + 1), 9000); // Cambia el texto cada 9 segundos
                } else {
                    setTimeout(() => {
                        document.querySelector('button').style.display = 'block'; // Mostrar botón después del último texto
                    }, 9000);
                }
            }

            // Iniciar el proceso de cambio de texto
            changeText(0);
        </script>
    </div>
    <br><br>
    <button onclick="window.location.href = 'preguntas.php';">Ir a Preguntas</button>
</body>
</html>
