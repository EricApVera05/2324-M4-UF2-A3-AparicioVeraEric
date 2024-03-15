<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./estilos/style.css">
    <title>Pre-preguntas</title>
</head>
<body class="bodypregunta">
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
        <button class="buttonpregunta" onclick="window.location.href = 'preguntas.php';">Ir a Preguntas</button>
    </div>
</body>
</html>
