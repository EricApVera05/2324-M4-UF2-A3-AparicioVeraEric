<!DOCTYPE html>
<html>
<head>
    <title>Lore</title>
    <link rel="stylesheet" type="text/css" href="./estilos/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        
        @media screen and (max-width: 700px) {
            .text-container {
                width: 80%; /* Establece un ancho máximo para el contenedor de texto */
                text-align: justify; /* Justifica el texto para un mejor aspecto */
                font-size: 0.9em; /* Reducir el tamaño de la fuente */
                line-height: 1.5; /* Ajusta la altura de línea */
                overflow-y: auto; /* Agrega desbordamiento automático vertical para el contenido */
                max-height: calc(100vh - 150px); /* Limita la altura máxima para evitar que el contenido se desborde */
            }
        }
    </style>
</head>
<body class="bodylore">
    <div class="text-container">
        <span class="line">Después de años de soñar con sumergirse en el mundo de la informática, finalmente habías conseguido la oportunidad de estudiar en el prestigioso Instituto Jesuïtes Bellvitge.</span>
        <span class="line">Era el lugar perfecto para cumplir sus metas y convertirse en un experto en programación. Sin embargo, algo le inquietaba: los rumores sobre el temible profesor García.</span>
        <span class="line">El nombre de García había sido mencionado repetidamente en los relatos de estudiantes anteriores.</span>
        <span class="line">Se decía que era estricto hasta el punto de la intimidación, con una mirada que parecía penetrar en el alma de los alumnos.</span>
        <span class="line">A pesar de ello también se mencionaba el cómo después de años allí los alumnos salían realmente apasionados por la informática hasta el punto de la obsesión.</span>
        <span class="line">El primer día de clases llegó, te encuentras frente al imponente edificio del instituto. Con el corazón latiendo con fuerza, entras decidido por la puerta principal.</span>
        <span class="line">Justo en el momento en que pasabas el umbral, la puerta se cerró de golpe tras de ti, haciendo eco en el silencio del vestíbulo.</span>
    </div>
    <button id="botonlore" class="hidden">Comenzar</button>

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
        const boton = document.getElementById('botonlore');

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