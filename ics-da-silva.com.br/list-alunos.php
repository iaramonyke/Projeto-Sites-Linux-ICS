<?php
include 'conexao.php';

// Verifica se o parâmetro id_turma foi passado na URL
$id_turma = isset($_GET['id_turma']) ? $_GET['id_turma'] : null;

// Se o id_turma não foi fornecido, exibir uma mensagem
if ($id_turma === null) {
    echo "Por favor, forneça o ID da turma para visualizar os alunos.";
} else {
    // Consulta SQL modificada para filtrar os alunos pela turma
    $sql = "SELECT aluno.*, turma.nome as nome_turma FROM aluno
            JOIN turma ON aluno.id_turma = turma.id
            WHERE aluno.id_turma = $id_turma";
    
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Lista de Alunos da Turma</h2>";
        echo "<ul>";
}
}
$db->close();
?>
