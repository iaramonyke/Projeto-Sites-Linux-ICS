<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $id_turma = $_POST["id_turma"];

    $sql = "UPDATE aluno SET nome='$nome', id_turma='$id_turma' WHERE matricula='$matricula'";

    if ($conn->query($sql) === TRUE) {
        echo "Informações do aluno atualizadas com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>