<?php
    include('conexao.php');
    if (isset($_GET['id'])){
		$matricula = $_GET['id'];
    }
    else{die("erro");}
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
    th,
    table input {
      width: 15em;
    }
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
    <h1><a href="edit-aluno.php">Editaro Aluno</a></h1>
    <section>
      <div>
        <form action="update-aluno.php" method="POST">
          <table>
            <thead>
              <tr>
                <th>Nome</th>
                
                <th class="sem">Id turma</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="nome" required/></td>
                <td style="display: none;"><input hidden type="number" value="<?php echo $matricula; ?>" name="matricula" /></td>
                <td class="sem"><input type="number" name="id_turma" required/></td>
              </tr>
            </tbody>
          </table>
          <input type="submit" value="Adicionar Aluno" style="margin-right: 0.5em;">
        </form>
        <a href="back-aluno.php"><input type="button" value="Voltar" style="margin-left: 0.5em;"></a>
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
