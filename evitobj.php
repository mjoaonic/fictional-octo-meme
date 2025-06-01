<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EVITAR OBJETO</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="evitobj.css">
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
  <li><a href="menuinicial.php">MENU INICIAL</a></li>
    <li><a href="menujogos.php">JOGOS</a></li>
  <li><a href="sobrenos.php">SOBRE NÓS</a></li>
  </ul>
  
</div>


<h1>FOGE DO VÍRUS!</h1>

<button id="start">COMEÇAR!</button>

<div id="chatsolucao">
<div id="ggManinho" class="overlay esconder">
<p id="temporizador"></p>
<button id="restart" onclick="window.location.reload()">Recomeçar</button>
</div>

<div id="area">
	<div id="user">
   <img class="virus" src="assets/doutor.png"> 
  </div>
</div>
</div>



<script type="text/javascript">
	const area = document.getElementById('area');

	const user = document.getElementById('user');

	const start = document.getElementById('start');
  
  const temporizador = document.getElementById('temporizador');

  const ggManinho = document.getElementById('ggManinho');

  let inicio;
  let fim;


 
	let userX = 350;

	let enemies = [];

	let comecou = false;

  let perdeu = false;

  start.addEventListener('click', () => {
    if (perdeu) {
      window.location.reload();
      return
    }
    inicio= new Date();
    comecarJogo();
  })


  document.addEventListener('keydown', (e) => {
  	if(!comecou) return;
    if (e.key === 'ArrowLeft' && userX > 0) {
      userX -= 25;
    } else if (e.key === 'ArrowRight' && userX < 650) {
      userX += 25;
    }
    user.style.left = userX + 'px';
  });

let enemyTempo;
const maxEnemy = 7;

function apareceEnemy() {
  if (enemies.length >= maxEnemy) {
    clearInterval(enemyTempo);
    return;
  }

  const enemy =document.createElement ('div');
  enemy.classList.add('enemy');

  const virus = document.createElement('img');
  virus.src = 'assets/virus.png';
  virus.alt = 'Vírus';
  virus.classList.add('virus');

  enemy.appendChild(virus);

  area.appendChild(enemy);

  enemies.push({
    el: enemy,
    x: Math.floor(Math.random()*650),
    y: Math.floor(Math.random() * -500)
  })
}

function updateEnemies(argument) {
  if(!comecou) return;
  enemies.forEach(enemy => {
    enemy.y +=8;

    if (enemy.y > 500) {
      enemy.y = -50;
      enemy.x = Math.floor(Math.random() * 650);
    }

    if (
      enemy.y >= 400 && enemy.x < userX + 50 && enemy.x > userX - 50
      ) {
      fim = new Date();
      const total = (fim - inicio) / 1000;
      temporizador.textContent  = "Ficaste saudável durante " + total.toFixed(2) + " segundos.";
      ggManinho.classList.remove('esconder');
      ggManinho.style.display = 'flex';
      comecou = false;
      perdeu = true;
    }

  enemy.el.style.top = enemy.y + 'px';
  enemy.el.style.left = enemy.x +'px';
  });

  requestAnimationFrame(updateEnemies);
}
function comecarJogo() {
  start.style.display = 'none';
  comecou = true;
  enemyTempo = setInterval(apareceEnemy,1000);
  updateEnemies();
}
  


</script>
</body>
</html>