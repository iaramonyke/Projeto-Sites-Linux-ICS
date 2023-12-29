<html><?php
include 'conexao.php';
$query = 'delete from turma where id = '.$_GET['id'];
$result = mysqli_query($db, $query) or die (mysqli_error($db));

?>
	<script type="text/javascript">
		alert("Deletado com sucesso");
		window.location = "back-turmas.php";
	</script>
</html>

