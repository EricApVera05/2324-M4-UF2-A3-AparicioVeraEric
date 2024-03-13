<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="./estilos/style.css" rel='stylesheet' type='text/css'/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .container {
            height: 100%;
            background-color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img {
            display: inline-block;
            max-width: 100%;
            height: auto;
        }
        #boton {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 15px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <img src="img/advertencia.jpg">
    <button id="boton" onclick="location.href='inicio.php'">INICIAR</button>
</body>
</html>
