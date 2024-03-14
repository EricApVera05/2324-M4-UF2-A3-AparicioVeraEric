<?php
session_start(); // Inicia la sesión

// Verifica si hay una referencia en la solicitud HTTP
if (!isset($_SERVER['HTTP_REFERER'])) {
    // Si no hay referencia, redirige al usuario a index.html
    header("Location: index.html");
    exit; // Termina el script para evitar que se ejecute más código
}

// Si hay referencia, permite el acceso normal a la página
// Puedes continuar con el resto del código de fin.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin</title>
</head>
<body>
    <h1>¡Has llegado al final!</h1>
    <p>Este es el contenido de la página fin.php.</p>
</body>
</html>
