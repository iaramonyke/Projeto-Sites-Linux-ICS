<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $ano = $_POST["ano"];
    $horario = $_POST["horario"];

    $sql = "INSERT INTO turma (nome, descricao, ano, horario) VALUES ('$nome', '$descricao', '$ano', '$horario')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro de turma criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
