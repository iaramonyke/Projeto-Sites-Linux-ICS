<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $id_turma = $_POST["id_turma"];

    $sql = "INSERT INTO aluno (nome, matricula, id_turma) VALUES ('$nome', '$matricula', '$id_turma')";

    if ($conn->query($sql) === TRUE) {
        echo "Aluno adicionado com sucesso à turma.";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>