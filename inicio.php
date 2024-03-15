<!DOCTYPE html>
<html>
<head>	<title>Inicio</title>
<style>
		body {
			background-image: url('./img/Imagenintro.jpg');
			background-position:center;
			color: white;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin: 0;
			height: 100vh;
			font-family: 'Candara', sans-serif;
			text-align: center;
		}
		#boton {
			position: absolute;
			bottom: 50px;
			left: 50%;
			transform: translateX(-50%);
			padding: 10px 20px;
			color: black;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
        h1 {
            font-size: 5em; /* Tamaño del texto grande */
            text-align: center;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
	</style>
</head>
<body>
	<?php
        // Verifica si hay una referencia en la solicitud HTTP
        if (!isset($_SERVER['HTTP_REFERER'])) {
            // Si no hay referencia, redirige al usuario a index.html
            header("Location: index.html");
            exit; // Termina el script para evitar que se ejecute más código
        }
    ?>
	<h1>Informatican Issues</h1>
	<div>
		<button id="boton" onclick="location.href='lore.php'">INICIAR</button>
	</div>
</body>
</html>