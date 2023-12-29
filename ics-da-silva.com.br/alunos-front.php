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
  <link href="css/adicionar.css" rel="stylesheet" type="text/css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap');
    td {
      padding-left: 0.5em;
    }

    th {
      width: 22em;
    }
  </style>
</head>

<body class="margem">
  <header>
    <div><hr></div>
    <figure>
      <a href="index.html"><img src="imagens/logo.svg" /></a>
    </figure>
    <div><hr></div>
  </header>

  <main>
    <?php
    // Verifica se o parâmetro id_turma foi passado na URL
    $id_turma = isset($_GET['id_turma']) ? $_GET['id_turma'] : null;
    if ($id_turma !== null) {
      // Inclua o script PHP para listar alunos da turma
      include 'list-alunos.php';
      ?>
      <h1><a href="#">TURMA:<?php echo $id_turma; ?> </a></h1>
      <section>
        <?php
        if (!empty($result)) {
          echo "<p>ALUNOS</p>";
          echo "<div>";
          echo "<table>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Nome</th><th class='sem'>Matrícula</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";

          foreach ($result as $aluno) {
            echo "<tr>";
            echo "<td>{$aluno['nome']}</td><td class='sem'>{$aluno['matricula']}</td>";
            echo "</tr>";
          }

          echo "</tbody>";
          echo "</table>";
          echo "</div>";
        } else {
          echo "<p>Nenhum aluno encontrado para a turma selecionada.</p>";
        }
        ?>
      </section>
      <?php
    } else {
      echo "<p>Por favor, forneça o ID da turma para visualizar os alunos.</p>";
    }
    ?>
    <input type="button" value="Voltar para turmas" onclick="history.back()">
  </main>

  <footer>
    <figure>
      <img src="imagens/logo-ics.svg" />
    </figure>
    <p>© Desenvolvido por Iraikare Rodrigues, Iara Monyke e Kauã Batista</p>
  </footer>
</body>

</html>
