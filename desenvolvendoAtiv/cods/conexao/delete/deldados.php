<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	

	$sql = "DELETE FROM `adm` WHERE `id_adm` = '$id'";
	$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../inicio/index.php'</script>";

?>