<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$senha = $_POST['senha'];

	// echo $id;
	
	// Alteração
    $sql = "UPDATE `adm` SET `nome_adm`='$nome',`email_adm`='$email',`nascimento_adm`='$nascimento',`senha_adm`='$senha' WHERE `id_adm` = '$id'";

		$alterar = mysqli_query($cn, $sql);
		echo "<script>window.location='../../adm/pagesMenu/meusdados.php?'</script>";

    // Verificando alteração
