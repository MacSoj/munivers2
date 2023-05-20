<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputDPI = $_POST['dpi'];

    // Comparar el valor del DPI ingresado con el código específico
    if ($inputDPI === '3186801060719') {
        header('Location: muni.html');
    }else{
		echo "El DPI ingresado es incorrecto. Por favor, inténtalo nuevamente.";
	}
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MUNIVERS</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="./css/style.css">
  <link href="./imagenes/Munivers.png" rel="icon">
  <link href="./imagenes/Munivers.png" rel="apple-touch-icon">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="container" id="container">

	<div class="form-container sign-in-container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<h1>Ingresa tu DPI</h1>
			<input type="text" name="dpi" placeholder="DPI"  lang="13" required maxlength="13" />
			<a href="./muni.html">Información sobre MUNIVERS</a>
			<button>Ingresar</button>
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>!Hola amigo!</h1>
				<p>Ingresa tu DPI y conoce como se ve una municipalidad en MUNIVERS</p>
			</div>
		</div>
	</div>

</div>

<!-- partial -->
  <script  src="./js/script.js"></script>

</body>
</html>
