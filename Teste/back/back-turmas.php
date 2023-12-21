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
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300&display=swap');

    /* Estilos para o modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
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
    <h1><a href="#">Minhas Turmas</a></h1>
    <section>
      <div>
        <?php
        // Inclua a configuração de conexão com o banco de dados
        include 'config.php';

        // Consulta para obter as turmas
        $sql = "SELECT * FROM turma";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          echo '<div style="column-gap: 0;">
                  <table>
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Descrição</th>
                        <th class="sem">Horário</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>';

          // Exibindo os dados
          while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['nome'] . '</td>
                    <td>' . $row['ano'] . '</td>
                    <td>' . $row['descricao'] . '</td>
                    <td class="sem">' . $row['horario'] . '</td>
                    <td>
                      <button onclick="showModal(\'myModal\')">Informações</button>
                      <button onclick="confirmDelete()">Excluir</button>
                      <button onclick="showModal(\'updateModal\')">Atualizar</button>
                    </td>
                  </tr>';
          }

          echo '</tbody></table>
                </div>';
        } else {
          echo 'Não há turmas cadastradas.';
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
        ?>
      </div>
    </section>
    <!-- Modal de informações -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="hideModal('myModal')">&times;</span>
        <p>Informações detalhadas da turma...</p>
      </div>
    </div>

    <!-- Modal de atualização -->
    <div id="updateModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="hideModal('updateModal')">&times;</span>
        <p>Formulário de atualização da turma...</p>
      </div>
    </div>
  </main>

  <footer>
    <figure>
      <img src="imagens/logo-ics.svg" />
    </figure>
    <p>© Desenvolvido por Iraikare Rodrigues, Iara Monyke e Kauã Batista</p>
  </footer>

  <script>
    // Função para mostrar o modal
    function showModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "block";
    }

    // Função para ocultar o modal
    function hideModal(modalId) {
      var modal = document.getElementById(modalId);
      modal.style.display = "none";
    }

    // Função para confirmar a exclusão
    function confirmDelete() {
      if (confirm("Tem certeza que deseja excluir esta turma?")) {
        // Coloque aqui a lógica para excluir a turma
        alert("Turma excluída com sucesso!");
      }
    }
  </script>
</body>

</html>