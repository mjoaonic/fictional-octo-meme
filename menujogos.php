<?php
$current_page = 'jogos';
include "cabecalho.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOGOS</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<center>
	<h1 class="titulojogos">Oferta de Jogos</h1>
	<div class="ppt">

		<a href="pepate.php">
		<h1>Pedra, Papel, Tesoura!</h1>
		</a>
	</div>

	<div class="obst">
		<a href="evitobj.php"><h1>Foge do obstáculo!</h1></a>
	
	</div>

	<div class="adnr">
		<a href="adinumero.php"><h1>Adivinha o Número!</h1></a>
		
	</div>

	<div class="">
	</div>
</center>
	<?php
	include "footer.php"
	?>
</body>

</html>