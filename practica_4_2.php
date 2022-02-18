<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$cuadrado = 0;

echo "*-*-*---------------CUADRADO---------------*-*-* <br/>";
	for ($i = 1; $i <= 50; $i++) {
		$cuadrado = $cuadrado + $i**2;
		echo $i**2 . "<br/>";
	}

echo "La suma total de los cuadrados es:" . $cuadrado;
	
?>
</body>
</html>