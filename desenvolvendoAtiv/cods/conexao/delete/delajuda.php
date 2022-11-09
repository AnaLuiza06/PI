<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	

	$sql = "DELETE FROM `ajuda` WHERE `id_ajuda` = '$id'";
	$deletar = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/pagesMenu/ajuda.php'</script>";
