<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

echo "*-*-*---------------NUMEROS IMPARES---------------*-*-* <br/>";
	for ($i = 1; $i < 100; $i = $i + 2) {
		echo "<p>$i</p>";
	}

echo "La suma total es:";
	for ($i = 1; $i < 100; $i = $i + 2) {
		$suma = $suma + $i;
	}

echo "$suma";

?>
</body>
</html>


