<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de espera</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="overlay"></div>
    <img src="./.." id="imagen" alt="Imagen de espera">
    <?php
        sleep(5); // Espera otros 5 segundos
        header('Location: inicio.php'); // Redirige a inicio.php después de 5 segundos adicionales
        exit();
    ?>
</body>
</html>
