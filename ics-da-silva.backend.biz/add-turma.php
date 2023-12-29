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
  </style>
</head>

<body class="margem">
  <header>
    <div><hr></div>
    <figure>
      <a href="backend.html"><img src="imagens/logo.svg" /></a>
    </figure>
    <div><hr></div>
  </header>

  <main>
    <h1><a href="add_turma.html">Adicionar Turma</a></h1>
    <section>
      <div>
        <form action="create-turma.php" method="POST">
          <table>
            <thead>
              <tr>
                <th>Nome</th>
                <th>Ano</th>
                <th>Descrição</th>
                <th class="sem">Horário</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="nome" required/></td>
                <td><input type="number" name="ano" required/></td>
                <td><input type="text" name="descricao"/></td>
                <td class="sem"><input type="text" name="horario" required/></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" value="Adicionar Turma" style="margin-right: 0.5em;">
        </form>
        <a href="back-turmas.php"><input type="button" value="Voltar" style="margin-left: 0.5em;"></a>
      </div>
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
