
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cabeçalho</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="barra">
	
	<div class="topo">
	<img class="logo" src="assets/sojogo.svg">
	<img class="logtex" src="assets/soletra.svg">
	</div>

	<ul class="nave">
	<li><a href="base.php" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">MENU INICIAL</a></li>
  <li><a href="jogos.php" class="<?php echo ($current_page == 'jogos') ? 'active' : ''; ?>">JOGOS</a></li>
  <li><a href="sobre.php" class="<?php echo ($current_page == 'sobre') ? 'active' : ''; ?>">SOBRE NÓS</a></li>
	</ul>

	

</div>
</body>
</html>

