<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dr. Games</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="image" href="assets/sojogo.svg">
	<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>
<div class="barra">
	
	<div class="topo">
	<img class="logo" src="assets/sojogo.svg">
	<img class="logtex" src="assets/soletra.svg">
	</div>

	<ul class="nave">
	<li><a href="index.php" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">MENU INICIAL</a></li>
  <li><a href="menujogos.php" class="<?php echo ($current_page == 'jogos') ? 'active' : ''; ?>">JOGOS</a></li>
  <li><a href="sobrenos.php" class="<?php echo ($current_page == 'sobre') ? 'active' : ''; ?>">SOBRE NÓS</a></li>
	</ul>
	
	</div>


<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>

