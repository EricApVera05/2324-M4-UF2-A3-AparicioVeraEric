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
        }
    </style>
</head>
<body>
    <script>
        // Textos a mostrar y preguntas
        const texts = [
            "Veo que has despertado, te preguntarás que haces atado.",
            "No te asustes, estas aquí por una razón por la cual te apuntaste, aprender informatica",
            "Te iré mostrando preguntas las cuales tendrás que responder para continuar en el centro, en caso de que no sea así, recibirás una penitencia."
        ];

        // Función para cambiar el texto del cuerpo
        function changeText(index) {
            document.body.innerHTML = texts[index];
            setTimeout(() => {
                if (index < texts.length - 1) {
                    changeText(index + 1);
                } else {
                    showQuestion();
                }
            }, 10000); // Cambia el texto cada 10 segundos
        }

        // Iniciar el proceso de cambio de texto
        changeText(0);
    </script>
</body>
</html>
