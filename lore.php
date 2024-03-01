<!DOCTYPE html>
<html>
<head>
    <title>Lore</title>
    <style>
        body{
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: monospace;
            font-size: 1.1em;
        }

        .text-container {
            overflow: hidden;
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
            display: none;
            margin-top: 20px; /* Añadido para separar el botón del texto */
        }

        .visible {
            display: block !important; /* Usamos !important para asegurarnos de que este estilo prevalezca */
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

    <?php 
    // PHP para mostrar el botón al finalizar todas las animaciones
    if (!empty($_GET['animation_finished'])) {
        echo '<button id="boton" href="pregunta.php" class="visible">Empezar</button>';
    }
    ?>
    <script>
        // JavaScript para mostrar el botón al finalizar todas las animaciones
        const spans = document.querySelectorAll('.line');

        let animationCount = 0;
        spans.forEach((span, index) => {
            span.addEventListener('animationend', () => {
                animationCount++;
                if (animationCount === spans.length) {
                    document.getElementById('boton').classList.add('visible');
                }
            });
        });
    </script>
</body>
</html>
