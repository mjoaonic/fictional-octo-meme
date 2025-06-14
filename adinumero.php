<?php
include('cabecalho.php')
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="adnumero.css">
  <link rel="icon" type="image" href="assets/sojogo.svg">
  <title>Adivinha o Número</title>
</head>
<body>


<center>
<br>
<br>

<h1>Adivinha o número!</h1>

<br>

<h2>Escolhe a dificuldade:</h2>
<br>
<div id="dificuldade">
<button class="facil" onclick="escolher('n1')">Fácil (1 algarismo)</button>
<button class="medio" onclick="escolher('n2')">Médio (2 algarismos)</button>
<button class="dificil" onclick="escolher('n3')">Difícil (3 algarismos)</button>
</div>
<br>
<br>

<h2>Faz a tua tentativa:</h2>
<br>
<div id="tent">

<input type="number" id="tentativa" class="bomboclat">
<button class="tentar" onclick="verificar()" >Tentar!</button>

</div>

<div id="resultado" ></div>

<script>
  
  let numeroGerado = null;
  let jogoAtivo = false;
  let ntentativas = 0;

  function escolher(nivel) {
    if (nivel === 'n1') {
      numeroGerado = Math.floor(Math.random() * 9) + 1;
    } else if (nivel === 'n2') {
      numeroGerado = Math.floor(Math.random() * 90) + 10;
    } else {
      numeroGerado = Math.floor(Math.random() * 900) + 100;
    }
    jogoAtivo = true;
    ntentativas = 0;
    document.getElementById('resultado').textContent = "Número gerado! Faz a tua tentativa.";
  }

  function verificar() {
    if (!jogoAtivo || numeroGerado === null) {
      document.getElementById('resultado').textContent = "Escolhe primeiro a dificuldade.";
      return;
    }

    const tentativa = parseFloat(document.getElementById('tentativa').value);

   

if (isNaN(tentativa) || tentativa < 0 || !Number.isInteger(tentativa)) {
  document.getElementById('resultado').textContent = "Insere um número inteiro válido, igual ou maior que zero.";
  return;
}





    ntentativas++;

    if (tentativa === numeroGerado) {
      jogoAtivo = false;
      numeroGerado = null;

      if (ntentativas === 1) {
        document.getElementById('resultado').innerHTML = `
          <strong style="color:green;">🎉 Acertaste! O número era ${tentativa}.</strong><br>
          Fizeste ${ntentativas} tentativa.<br>
          <em>És um vidente!</em><br>
          Escolhe uma dificuldade para jogar outra vez.
        `;
      } else if (ntentativas > 1 && ntentativas < 6) {
        document.getElementById('resultado').innerHTML = `
          <strong style="color:green;">🎉 Acertaste! O número era ${tentativa}.</strong><br>
          Fizeste ${ntentativas} tentativas.<br>
          <em>Nada mau. Podias ter demorado mais...</em><br>
          Escolhe uma dificuldade para jogar outra vez.
        `;
      } else {
        document.getElementById('resultado').innerHTML = `
          <strong style="color:green;">🎉 Acertaste! O número era ${tentativa}.</strong><br>
          Fizeste ${ntentativas} tentativas.<br>
          <em>Finalmente...</em><br>
          Escolhe uma dificuldade para jogar outra vez.
        `;
      }

      ntentativas = 0; 
    } else {
      let dica = tentativa > numeroGerado
        ? "Tenta um pouco mais abaixo..."
        : "Tenta um pouco mais acima...";
      document.getElementById('resultado').innerHTML = `
        <strong style="color:red;">❌ Errado. ${dica}</strong>
      `;
    }
  }


</script>


</body>
</html>
