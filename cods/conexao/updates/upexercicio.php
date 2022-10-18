<?php 
	
	include ('../conexao.php');

	$id = $_GET['cd'];
	$nome = $_POST['nome'];
	$foco = $_POST['foco'];
	$descricao = $_POST['descricao'];
	$duracao = $_POST['duracao'];
	$equipamentos = $_POST['equipamentos'];
	$contraindocacoes = $_POST['contraindocacoes'];
    $video = $_POST['video'];
    $imagem = $_POST['imagem'];

	// echo $id;
	
	// Alteração
    $sql = "UPDATE `exercicio` SET `nome_exercicio`='$nome',`foco_exercicio`='$foco',`desc_exercicio`='$descricao',`duracao_exercicio`='$duracao',`equipamentos_exercicio`='$equipamentos',`contra_indicacoes_exercicio`='$contraindocacoes',`video_exercicio`='$video',`imagem_exercicio`='$imagem' WHERE `id_exercicio` = '$id'";

		$incluir = mysqli_query($cn, $sql);
		echo "<script>window.location='../../adm/pagesMenu/alongamentos.php?'</script>";

    // Verificando alteração

?>