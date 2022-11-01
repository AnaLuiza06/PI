<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	

	$sql = "DELETE FROM `desafios` WHERE `id_desafios` = '$id'";
	$deletar = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/pagesMenu/desafios.php'</script>";

?>