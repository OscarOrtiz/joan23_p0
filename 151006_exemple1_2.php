<!--
Exemple unit a 151006_pagina1.php que recull el paràmetre passat per url i el mostra per pantalla
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	$numero= $_GET['parametro'];
	for ($cont=1; $cont<=10 ; $cont++) { 
		$res=$numero*$cont;
		echo "$numeroX$cont = $res";
	}

?>
	<br/><br/>
	<a href="151006_exemple1.php">Volver</a>
</body>
</html>