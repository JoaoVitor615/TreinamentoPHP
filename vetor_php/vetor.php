<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Vetor</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$ds[0] = "Domingo";
			$ds[1] = "Segunda-feira";
			$ds[2] = "Terça-feira";
			$ds[3] = "Quarta-feira";
			$ds[4] = "Quinta-feira";
			$ds[5] = "Sexta-feira";
			$ds[6] = "Domingo";
			$ds[7] = "Sábado";			
			echo "Hoje é ".$ds[date("w")];
			echo "teste";
		?>
	</body>
</html>