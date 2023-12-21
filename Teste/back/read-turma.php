<?php
include 'conexao.php';

$sql = "SELECT * FROM turma";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Ano: " . $row["ano"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>