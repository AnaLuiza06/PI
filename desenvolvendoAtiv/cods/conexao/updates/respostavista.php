<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	
	// Alteração
    $sql = "UPDATE `duvidausuario` SET `status_duvida`= 1 WHERE `id_duvida`='$id'";

		$alterar = mysqli_query($cn, $sql);
		echo "<script>window.location='../../user/pagesMenu/meusdados.php?'</script>";

    // Verificando alteração

?>