<?php 
	
	include ('../conexao.php');

	$cod = $_POST['cod'];
	$id_user = $_POST['id_user'];
	$data = $_POST['data'];
	$mensagem = $_POST['mensagem'];
	$id_adm = $_POST['id_adm'];
	$apresentacao = $_POST['apresentacao'];
	$resposta = $_POST['resposta'];

	// echo $id;
	
	// Alteração
    $sql = "UPDATE `duvidaUsuario` SET `id_usuario`='$id_user',`id_adm`='$id_adm',`mensagem_duvida`='$mensagem',`resposta_divida`='$resposta',`data_duvida`='$data',`status_duvida`='0' WHERE `id_duvida` = '$cod'";

		$alterar = mysqli_query($cn, $sql);
		echo "<script>window.location='../../adm/pagesMenu/ajuda.php?'</script>";

    // Verificando alteração
