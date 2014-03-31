<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>animate</title>
</head>
<body>

	<form action="animate.php" method="post" name = "form">
		<label for="numero">ingrese el numero de estudiartes</label>
		<input type="text" name="numero"><br>
		<input type="submit" name="enviar"><br>
	

<form action="animate.php " method = "post" name="calcula">

	
		<?php 
		$numero = 0;
		$numero = $_POST["numero"];
		$numero2 = $numero;
		
		if (isset($_POST["enviar"])) {
			# code...
		
			$numero = $_POST["numero"];

			for ($i=1; $i <= $numero ; $i++) {
			
		 ?>

		 alumno: <?php echo "$i"; ?><input type="text" name ="nota<?php echo "$i"; ?>">
		 							<input type="text" name ="nota9<?php echo "$i"; ?>"><br>

<?php } ?>
<input type="submit" name ="calcular" value="calcular" ><br>
<?php $numero2 = $numero; } ?>
<?php 


	
	
	if (isset($_POST["calcular"])) {
		
	
		
		$suma = 0;
		$prom = 0;
		$promI= 0;
	
	for ($i=1; $i <= $numero2 ; $i++) { 


		$nota1 = $_POST["nota$i"];
		$nota2 = $_POST["nota9$i"];

		$promI = ($nota1 + $nota2)/2;

		$suma = $suma + $promI;


		$prom = $suma/$numero2;

		echo "alumno: $i  el promedio es  : $promI <br>";
		$promI = 0;
	}

 echo "Promedio de todos: $prom";
 }
	 ?>
	</form>
	</form>

	
	
</body>
</html>