<?php
include 'conexao.php';

$sql = "SELECT * FROM turma";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Turmas</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>ID: {$row['id']} - Nome: {$row['nome']} - Ano: {$row['ano']}</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhuma turma encontrada.";
}

$conn->close();
?>