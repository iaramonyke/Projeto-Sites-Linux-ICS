<?php
include 'conexao.php';

$sql = "SELECT * FROM turma";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Lista de Turmas</h2>";
    echo "<ul>";
}
$db->close();
?>
