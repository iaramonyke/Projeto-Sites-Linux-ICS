<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ics da Silva</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <link href="css/back-index.css" rel="stylesheet" type="text/css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap');
  </style>
</head>

<body class="margem">
  <header>
    <div><hr></div>
    <figure>
      <a href="backend_index.php"><img src="imagens/logo.svg" /></a>
    </figure>
    <div><hr></div>
  </header>

  <main>
    <a href="back-turmas.php"><input type="button" value="Turmas"></a>
    <a href="back-alunos.php"><input type="button" value="Alunos"></a>
  </main>

  <footer>
    <figure>
      <img src="imagens/logo-ics.svg" />
    </figure>
    <p>© Desenvolvido por Iraikare Rodrigues, Iara Monyke e Kauã Batista</p>
  </footer>
</body>

</html>