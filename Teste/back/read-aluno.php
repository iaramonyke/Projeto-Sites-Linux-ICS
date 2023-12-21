<?php
include 'conexao.php';

$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. " - Matrícula: " . $row["matricula"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>