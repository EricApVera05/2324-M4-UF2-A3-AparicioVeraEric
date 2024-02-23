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

		span{
			display: block;
			white-space: nowrap;
			border-right: 4px solid;
			width 12ch;
			animation: typing 4s steps(35), blink .5s infinite step-end alternate;
			overflow: hidden;
		}

		@keyframes typing{
			from { width: 0; }
			to {width: 100%}
		}

		@keyframes blink{
			50% { border-color: transparent;}
		}

		#boton{
			padding: 10px 20px;
			background-color: white;
			color: black;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			display: none;
		}

		.visible{
			display: block;
		}
	</style>
</head>
<body>
	<span>Después de años de soñar con sumergirse en el mundo de la informática, finalmente habías conseguido la oportunidad de estudiar en el prestigioso Instituto Jesuïtes Bellvitge. 
		Era el lugar perfecto para cumplir sus metas y convertirse en un experto en programación. Sin embargo, algo le inquietaba: los rumores sobre el temible profesor García.
	El nombre de García había sido mencionado repetidamente en los relatos de estudiantes anteriores. Se decía que era estricto hasta el punto de la intimidación, con una mirada que parecía penetrar en el alma de los alumnos. 
	A pesar de ello también se mencionaba el cómo después de años allí los alumnos salían realmente apasionados por la informática hasta el punto de la obsesión.
	El primer día de clases llegó te encuentras frente al imponente edificio del instituto. Con el corazón latiendo con fuerza, entras decidido por la puerta principal. 
	 Justo en el momento en que pasabas el umbral, la puerta se cerró de golpe tras de ti, haciendo eco en el silencio del vestíbulo.</span>
	
<button id="boton" onclick="location.href='pregunta.php'" class="visible">Empezar</button>
	<script>
		setTimeout(() => {
			const boton = document.getElementById('boton')
			boton.classList.add('visible')
		}, 10000);
	</script>
</body>
</html>