<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$senha = $_POST['senha'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	// echo $id;
	
	// Alteração
    $sql = "UPDATE `usuario` SET `nome_usuario`='$nome',`email_usario`='$email',`nascimento_usuario`='$nascimento',`altura_usuario`='$altura',`peso_usuario`='$peso',`senha_usuario`='$senha' WHERE `id_usuario` = '$id'";

		$alterar = mysqli_query($cn, $sql);
		echo "<script>window.location='../../user/pagesMenu/meusdados.php?'</script>";

    // Verificando alteração

?>