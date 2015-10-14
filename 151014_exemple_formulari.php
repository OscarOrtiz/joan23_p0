<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios</title>
	</head>
	<body>
<?php

	$con = mysqli_connect('localhost', 'root', '', 'BD_exemple');
	$sql = "SELECT * FROM producto WHERE pro_preu>=$_REQUEST[min] AND pro_preu<=$_REQUEST[max]"

	$datos = mysqli_query($con, $sql);
?>
</body>
</html>