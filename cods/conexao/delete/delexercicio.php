<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	

	$sql = "DELETE FROM `exercicio` WHERE `id_exercicio` = '$id'";
	$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/pagesMenu/alongamentos.php'</script>";

?>