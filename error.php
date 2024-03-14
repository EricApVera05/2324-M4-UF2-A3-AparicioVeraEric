<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            background-image: url('./img/pasillo.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sabía que fallarias</h1>
        <form action="pregunta.php" method="post">
            <button type="submit">Volver al inicio</button>
        </form>
    </div>
</body>
</html>
