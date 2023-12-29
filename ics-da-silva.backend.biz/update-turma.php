<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $ano = $_POST["ano"];
    $horario = $_POST["horario"];

    $sql = "UPDATE turma SET nome='$nome', descricao='$descricao', ano='$ano', horario='$horario' WHERE id='$id'";

    if ($db->query($sql) === TRUE) {
        echo "Registro de turma atualizado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $db->error;
    }
}

$db->close();
?>
