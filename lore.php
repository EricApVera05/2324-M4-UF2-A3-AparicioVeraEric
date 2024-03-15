<!DOCTYPE html>
<html>
<head>
    <title>Lore</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
            color: white;
            display: flex;
            flex-direction: column; /* Aseguramos que los elementos estén en columna */
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: monospace;
            font-size: 1.1em;
        }

        .text-container {
            overflow: hidden;
            margin-bottom: 20px; /* Añadido para separar el texto del botón */
            margin-top:  220px; /* Para ajustarlo al final de la página */
        }

        .line {
            display: block;
            white-space: nowrap;
            border-right: 4px solid;
            width: 0;
            overflow: hidden;
            animation: typing 4s steps(35) forwards, blink .5s infinite step-end alternate;
        }

        @keyframes typing {
            0% { width: 0; }
            100% { width: 100%; }
        }

        @keyframes blink {
            50% { border-color: transparent; }
        }

        #boton {
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Añadido para ocultar el botón inicialmente */
        #boton.hidden {
            display: none;
        }

        /* Añadido para mostrar el botón después de la animación */
        #boton.visible {
            display: block;
            margin-top: 20px; /* Añadido para separar el botón del texto */
        }
    </style>
</head>
<body>
    <div class="text-container">
        <span class="line">Después de años de soñar con sumergirse en el mundo de la informática, finalmente habías conseguido la oportunidad de estudiar en el prestigioso Instituto Jesuïtes Bellvitge.</span>
        <span class="line">Era el lugar perfecto para cumplir sus metas y convertirse en un experto en programación. Sin embargo, algo le inquietaba: los rumores sobre el temible profesor García.</span>
        <span class="line">El nombre de García había sido mencionado repetidamente en los relatos de estudiantes anteriores.</span>
        <span class="line">Se decía que era estricto hasta el punto de la intimidación, con una mirada que parecía penetrar en el alma de los alumnos.</span>
        <span class="line">A pesar de ello también se mencionaba el cómo después de años allí los alumnos salían realmente apasionados por la informática hasta el punto de la obsesión.</span>
        <span class="line">El primer día de clases llegó, te encuentras frente al imponente edificio del instituto. Con el corazón latiendo con fuerza, entras decidido por la puerta principal.</span>
        <span class="line">Justo en el momento en que pasabas el umbral, la puerta se cerró de golpe tras de ti, haciendo eco en el silencio del vestíbulo.</span>
    </div>
    <button id="boton" class="hidden">Comenzar</button>

    <?php
        // Verifica si hay una referencia en la solicitud HTTP
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // Si no hay referencia, redirige al usuario a index.html
            header("Location: index.html");
            exit; // Termina el script para evitar que se ejecute más código
        }
    ?>
    <script>
        const textContainer = document.querySelector('.text-container');
        const boton = document.getElementById('boton');

        textContainer.addEventListener('animationend', () => {
            boton.classList.add('visible');
            boton.classList.remove('hidden');
        });
        
        
        boton.addEventListener('click', () => {
            window.location.href = 'pregunta.php';
        });
    </script>
</body>
</html>