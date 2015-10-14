<!--
Exemple que mostra per pantalla els números de l'1 al 10 amb un bucle for. Aquests números son un enllaç a la pàgina 151006_exemple1_2.php passant com a paràmetre el número clickat.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
	for($cont=1;$cont<=10;$cont++){
		echo "<a href='151006_exemple1_2.php?parametro:=$cont'>$cont</a><br/>";
	}
?>
</body>
</html>