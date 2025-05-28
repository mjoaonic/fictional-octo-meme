<?php
  include "cabecalho.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EVITAR OBJETO</title>
	<link rel="stylesheet" type="text/css" href="evitobj.css">

</head>
<body>
<h1>EVITA O OBJETO!</h1>

<button id="start">COMEÇAR!</button>

<div id="area">
	<div id="user"></div>

</div>



<script type="text/javascript">
	const area = document.getElementById('area');

	const user = document.getElementById('user');

	const start = document.getElementById('start');
  
 
	let userX = 350;

	let enemies  [];

	let comecou = false;


  document.addEventListener('keydown', (e) => {
  	if(!comecou) return;
    if (e.key === 'ArrowLeft' && userX > 0) {
      userX -= 25;
    } else if (e.key === 'ArrowRight' && userX < 650) {
      userX += 25;
    }
    user.style.left = userX + 'px';
  });

  


</script>
</body>
</html>


<!--
<script>
  const area = document.getElementById('area');
  const user = document.getElementById('user');
  const startBtn = document.getElementById('start-btn');

  let userX = 175;
  let enemies = [];
  let gameStarted = false;

  // User movement
  document.addEventListener('keydown', (e) => {
    if (!gameStarted) return;
    if (e.key === 'ArrowLeft' && userX > 0) {
      userX -= 25;
    } else if (e.key === 'ArrowRight' && userX < 350) {
      userX += 25;
    }
    user.style.left = userX + 'px';
  });

  // Create one enemy every second
  let enemyInterval;
  const maxEnemies = 5;

  function spawnEnemy() {
    if (enemies.length >= maxEnemies) {
      clearInterval(enemyInterval);
      return;
    }

    const enemy = document.createElement('div');
    enemy.classList.add('enemy');
    area.appendChild(enemy);

    enemies.push({
      el: enemy,
      x: Math.floor(Math.random() * 350),
      y: Math.floor(Math.random() * -500)
    });
  }

  // Game loop
  function updateEnemies() {
    if (!gameStarted) return;

    enemies.forEach(enemy => {
      enemy.y += 5;

      // Reset enemy after bottom
      if (enemy.y > 500) {
        enemy.y = -50;
        enemy.x = Math.floor(Math.random() * 350);
      }

      // Collision detection
      if (
        enemy.y + 50 >= 450 &&
        enemy.x < userX + 50 &&
        enemy.x + 50 > userX
      ) {
        alert('Game Over!');
        window.location.reload();
      }

      enemy.el.style.top = enemy.y + 'px';
      enemy.el.style.left = enemy.x + 'px';
    });

    requestAnimationFrame(updateEnemies);
  }

  // Start game function
  function startGame() {
    startBtn.style.display = 'none';
    gameStarted = true;
    enemyInterval = setInterval(spawnEnemy, 1000); // one enemy per second
    updateEnemies(); // start animation
  }

  startBtn.addEventListener('click', startGame);
</script>
-->