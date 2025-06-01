<?php
include('cabecalho.php')
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jogo da Memória</title>
<link rel="stylesheet" type="text/css" href="memgame.css">
<link rel="icon" type="image" href="assets/sojogo.svg">
</head>
<body>


	  <h1>Jogo da Memória</h1>

<div class="conteudo">
  <div class="game-board" id="gameBoard"></div>
  <div id="overlay" class="overlay">
    <div id="box" class="box">
    <p id="resultado"></p>
    <button id="botaoReiniciar">Jogar Novamente</button>
    </div>
  </div>
</div>






  <script type="text/javascript">
  	

const imagePaths = [
  'assets/icon/icon1.png',
  'assets/icon/icon2.png',
  'assets/icon/icon3.png',
  'assets/icon/icon4.png',
  'assets/icon/icon5.png',
  'assets/icon/icon6.png',
  'assets/icon/icon7.png',
  'assets/icon/icon8.png',
  'assets/icon/icon9.png',
  'assets/icon/icon10.png'
];

let todasCartas = [...imagePaths, ...imagePaths];
let flippedCards = [];
let matchedCards = [];

let overlay = document.getElementById("overlay")
let resultado = document.getElementById('resultado');
let reiniciar = document.getElementById("botaoReiniciar")
let nJogadas = 0;

const board = document.getElementById('gameBoard');



function baralhar(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}


function criarCarta(iconUsado) {
  const card = document.createElement('div');
  card.classList.add('card');
  card.iconUsado = iconUsado;

  const rotatorio = document.createElement('div');
  rotatorio.classList.add('rotatorio');

  const frente = document.createElement('div');
  frente.classList.add('frente');

  const verso = document.createElement('div');
  verso.classList.add('verso');
  const img = document.createElement('img');
  img.src = iconUsado;
  verso.appendChild(img);

  rotatorio.appendChild(frente);
  rotatorio.appendChild(verso);
  card.appendChild(rotatorio);

  card.addEventListener('click', () => handleCardClick(card));
  return card;
}


function handleCardClick(card) {
  if (flippedCards.includes(card) || matchedCards.includes(card) || flippedCards.length >= 2) return;

  card.classList.add('flipped');
  flippedCards.push(card);

  if (flippedCards.length === 2) {
    nJogadas++;
    const card1 = flippedCards[0];
    const card2 = flippedCards[1];

    if (card1.iconUsado === card2.iconUsado) {
      matchedCards.push(card1, card2);
      flippedCards = [];

      if (matchedCards.length === todasCartas.length) {
        setTimeout(() => {
          resultado.textContent = "Boa! Só precisaste de "+nJogadas+" Jogadas!";
          overlay.classList.add('mostrar');
      }, 500);
      }
    } else {
      setTimeout(() => {
        card1.classList.remove('flipped');
        card2.classList.remove('flipped');
        flippedCards = [];
      }, 1000);
    }
  } 
}


function comecarJogo() {
  todasCartas = baralhar(todasCartas);
  board.innerHTML = '';
  todasCartas.forEach(image => {
    const card = criarCarta(image);
    board.appendChild(card);
  });
}

comecarJogo();

reiniciar.addEventListener('click', () => {
  overlay.classList.remove('mostrar');
  nJogadas = 0;
  flippedCards = [];
  matchedCards = [];
  comecarJogo();
});



  </script>

</body>
</html>