<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ics da Silva</title>
  <link href="/css/index.css" rel="stylesheet" />
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap');
  </style>
</head>

<body class="margem">
  <header>
    <div><hr></div>
    <figure>
      <a href="index.php"><img src='imagens/logo.svg' /></a>
    </figure>
    <div><hr></div>
  </header>

  <main>
    <h1><a href="index.php">Minhas Turmas</a></h1>
    <section>
      <?php
      // Inclua o script PHP para listar turmas
      include 'list-turmas.php';
      
      // Verifica se há turmas
      if (!empty($result)) {
        foreach ($result as $turma) {
          echo "<div>";
          echo "<div>";
          echo "<p>{$turma['id']}</p>";
          echo "<p>{$turma['nome']}</p>";
          echo "<p>{$turma['ano']}</p>";
          echo "<p>{$turma['horario']}</p>";
          echo "<p>{$turma['descricao']}</p>";
          // Link para visualizar os alunos da turma
          echo "<a href='alunos-front.php?id_turma={$turma['id']}'>Ver alunos</a>";
          echo "</div>";
          echo "</div>";
        }
      } 
	else {
        echo "<p>Nenhuma turma encontrada.</p>";
      }
      ?>
    </section>
  </main>

  <footer>
    <figure>
      <img src="imagens/logo-ics.svg" />
    </figure>
    <p>© Desenvolvido por Iraikare Rodrigues, Iara Monyke e Kauã Batista</p>
  </footer>
</body>

</html>
