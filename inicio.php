<!DOCTYPE html>
<html>
<head>	<title>Inicio</title>
<style>
		body {
  background-image: url('./img/Imagenintro.jpg');
  background-position:center;
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
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
	</style>
</head>
<body>
	<button id="boton" onclick="location.href='lore.php'">INICIO</button>
</body>
</html>