<?php
$current_page = "jogos";
include('cabecalho.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JOGOS</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<link rel="icon" type="image" href="assets/sojogo.svg">
</head>
<body>


<center>
	<h1 class="titulojogos">Oferta de Jogos</h1>
	<div class="ppt">
		<h1>Pedra, Papel, Tesoura!</h1>
		<br>
		<a href="pepate.php">
		<button class="jogar">
		Jogar!
		</button>
		</a>
	</div>

	
	

	<div class="adnr">
		<h1>Adivinha o Número!</h1>
		<br>
		<a href="adinumero.php">
		<button class="jogar">
		Jogar!
		</button>
		</a>
	</div>
	
	<div class="obst">
		<h1>Foge do vírus!</h1>
		<br>
		<a href="evitobj.php">
		<button class="jogar">
		Jogar!
		</button>
		</a>	
	</div>
	
	<div class="mem">
		<h1>Jogo da memória!</h1>
		<br>
		<a href="memgame.php">
		<button class="jogar">
		Jogar!
		</button>
		</a>
	</div>
	
</center>
<?php
include 'footer.php';
?>
</body>

</html>