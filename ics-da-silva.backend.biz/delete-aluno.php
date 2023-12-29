<html>
<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $matricula = $_GET["id"];

    $sql = "DELETE FROM aluno WHERE matricula='$matricula'";

    if ($db->query($sql) === TRUE) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $db->error;
    }
}

$db->close();
?>
<script>
	alert("excluido com sucesso");
	window.location = "back-aluno.php";
</script>
</html>
