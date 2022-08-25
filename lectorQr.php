<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Leer código de barras con JavaScript by parzibyte</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
		<p id="resultado">Aquí aparecerá el código</p>
		<p>A continuación, el contenedor: </p>
		<div id="contenedor"></div>
		<!-- Cargamos Quagga y luego nuestro script -->
		<script src="https://unpkg.com/quagga@0.12.1/dist/quagga.min.js"></script>
    <script src="script.js">
        document.addEventListener("DOMContentLoaded", () => {
	const $resultados = document.querySelector("#resultado");
	Quagga.init({
		inputStream: {
			constraints: {
				width: 1920,
				height: 1080,
			},
			name: "Live",
			type: "LiveStream",
			target: document.querySelector('#contenedor'), // Pasar el elemento del DOM
		},
		decoder: {
			readers: ["ean_reader"]
		}
	}, function (err) {
		if (err) {
			console.log(err);
			return
		}
		console.log("Iniciado correctamente");
		Quagga.start();
	});

	Quagga.onDetected((data) => {
		$resultados.textContent = data.codeResult.code;
		// Imprimimos todo el data para que puedas depurar
		console.log(data);
	});
});
    </script>
  </body>
</html>