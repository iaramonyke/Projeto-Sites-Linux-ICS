<?php
	$db = mysqli_connect('192.168.100.20' , 'ics', 'ics') or die ('Não foi possível conectar');
	mysqli_select_db($db, 'siteics' ) or die(mysqli_error($db));
?>
