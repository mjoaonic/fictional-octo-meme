<!DOCTYPE html>
<html>
<head>
  <title>Rock Paper Scissors</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="pepate.css">
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


  <h1 class="titini">Pedra, Papel, Tesoura!</h1>
  <center>
  <div class="consola">
  <button onclick="play('rock')">🪨 Pedra</button>
  <button onclick="play('paper')">📄 Papel</button>
  <button onclick="play('scissors')">✂️ Tesoura</button>
  </div>
  </center>
  
  <div class="scoreboard">
  <p>🏆 Pontuação: <span id="score">0</span></p>
</div>

  <div class="anim">
    <div class="sq user">
    <img class="useresc" id="peduser" src="assets/pedfoto.svg">
    <img class="useresc" id="papuser" src="assets/papfoto.svg">
    <img class="useresc" id="tesuser" src="assets/tesfoto.svg">
    </div>

    <div class=" sq vs"><img src="assets/VS.svg"></div>
    <div class="sq comp">
    <img class="compesc" id="pedcomp" src="assets/pedfoto.svg">
    <img class="compesc" id="papcomp" src="assets/papfoto.svg">
    <img class="compesc" id="tescomp" src="assets/tesfoto.svg">
    </div>

  </div>

  <div class="result" id="result"></div>

  





  <script>

     let score = 0;

  function play(userChoice) {
    const choices = ['rock', 'paper', 'scissors'];
    const computerChoice = choices[Math.floor(Math.random() * 3)];


    const map = {
      rock: 'ped',
      paper: 'pap',
      scissors: 'tes'
    };
  
    document.querySelectorAll('.useresc, .compesc, .vs').forEach(el => el.classList.remove('mostrar'));

    imgUser =  document.getElementById(map[userChoice] + 'user');
    imgUser.classList.add('mostrar');

    
    imgComp = document.getElementById(map[computerChoice] + 'comp');
    imgComp.classList.add('mostrar');

  
    document.querySelector('.vs').classList.add('mostrar');

   
    let resultText = '';
    if (userChoice === computerChoice) {
      resultText = 'Empate!';
    } 
    else if (
      (userChoice === 'rock' && computerChoice === 'scissors') ||
      (userChoice === 'paper' && computerChoice === 'rock') ||
      (userChoice === 'scissors' && computerChoice === 'paper')
    ) {
      resultText = 'Venceste!';
      score = score +1;
    } 
    else {
      resultText = 'O Computador venceu!';
      score = score-1;
    }

  
    document.getElementById('result').textContent = resultText;
    document.getElementById('result').classList.add('mostrar');
    document.getElementById('score').textContent = score;
  }

  
  window.onload = () => {
    document.querySelectorAll('.useresc, .compesc, .vs').forEach(el => el.classList.remove('mostrar'));
    document.getElementById('result').textContent = '';
    document.getElementById('score').textContent = score;
  };
</script>


 
</body>
</html>