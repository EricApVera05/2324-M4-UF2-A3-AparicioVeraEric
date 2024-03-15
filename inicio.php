<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="./estilos/style.css">
</head>
<body class="bodyinicio">
	<?php
        // Verifica si hay una referencia en la solicitud HTTP
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // Si no hay referencia, redirige al usuario a index.html
            header("Location: index.html");
            exit; // Termina el script para evitar que se ejecute más código
        }
    ?>
	<h1 id="h1inicio">Informatican Issues</h1>
	<div>
		<button id="boton" onclick="location.href='lore.php'" class="buttoninicio">INICIAR</button>
	</div>
</body>
</html>