<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$foco = $_POST['foco'];
	$descricao = $_POST['descricao'];
	$duracao = $_POST['duracao'];
	$equipamentos = $_POST['equipamentos'];
	$contraindocacoes = $_POST['contraindocacoes'];
    $video = $_POST['video'];
    $imagem = $_POST['imagem'];

	// echo $nome;
	
	 $consulta = mysqli_query($cn, "select nome_exercicio from exercicio where nome_exercicio = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>window.location='../../adm/formsAdd/addexercicio.php?adcionado=false'</script>";
	} else{
		// echo "Usuário NÃO cadastrado";

		$sql = "INSERT INTO `exercicio`(`nome_exercicio`, `foco_exercicio`, `desc_exercicio`, `duracao_exercicio`, `equipamentos_exercicio`, `contra_indicacoes_exercicio`, `video_exercicio`, `imagem_exercicio`) VALUES ('$nome','$foco','$descricao','$duracao','$equipamentos','$contraindocacoes','$video','$imagem')";
		$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/formsAdd/addexercicio.php?adcionado=true'</script>";
	}

?>