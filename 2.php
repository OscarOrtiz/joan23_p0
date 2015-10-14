<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8">
</head>
<body>
<!-- 
Tabla horizontal del 1 al 8 con 1 bucle for
-->
	<table width="300" border="1" align="center">
		<tr>
			<?php
				for ($numero=1; $numero<=8 ; $numero++) { 
					echo "<td>$numero</td>";
				}
			?>
		</tr>
	</table>

<br><br>
<!-- 
Tabla vertical del 1 al 8 con 1 bucle for
-->
	<table border="1" align="center">
			<?php
				for ($numero=1; $numero<=8 ; $numero++) { 
					echo "<tr><td>$numero</td></tr>";
				}
			?>
	</table>		

<br><br>
<!-- 
Tabla de 4 filas con 2 bucles for, horizontal del 1 al 4
-->
	<table border="1" align="center">
		<tr>
			<?php
			for ($num=1; $num<=4 ; $num++) { 
				echo "<tr>";
			
				for ($numero=1; $numero<=4 ; $numero++) { 
					echo "<td>$numero</td>";
				}
				echo "</tr>";
			}
			?>
		</tr>
	</table>

<br><br>
<!-- 
Tabla de 4 filas con 2 bucles for, vertical del 1 al 4
-->
	<table border="1" align="center">
		<tr>
			<?php
			for ($num=1; $num<=4 ; $num++) { 
				echo "<tr>";
			
				for ($numero=1; $numero<=4 ; $numero++) { 
					echo "<td>$num</td>";
				}
				echo "</tr>";
			}
			?>
		</tr>
	</table>

<br><br>
<!-- 
Tabla de 4 filas con 2 bucles for, horizontal del 1 al 16
-->
	<table border="1" align="center">
		<tr>
			<?php
			$cont=1;
			for ($num=1; $num<=4 ; $num++) { 
				echo "<tr>";
			
				for ($numero=1; $numero<=4 ; $numero++) { 
					echo "<td>$cont</td>";
					$cont++;
				}
				echo "</tr>";
			}
			?>
		</tr>
	</table>				
</body>
</html>