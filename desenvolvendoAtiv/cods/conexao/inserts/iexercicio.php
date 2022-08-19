<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$foco = $_POST['foco'];
	$descricao = $_POST['descricao'];
	$duracao = $_POST['duracao'];
	$equipamentos = $_POST['equipamentos'];
	$contraindocacoes = $_POST['contraindocacoes'];
    $video = $_POST['video'];

	// echo $nome;
	
	 $consulta = mysqli_query($cn, "select nome from alongamentos where nome = '$nome'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>alert('Alongamento já existente.')</script>";
	} else{
		// echo "Usuário NÃO cadastrado";
		$sql = "INSERT INTO `alongamentos`(`nome_usuario`, `email_usario`, `nascimento_usuario`, `altura_usuario`, `peso_usuario`, `senha_usuario`) VALUES ('$nome','$email','nascimento','$altura','$peso','$senha')";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		// echo "<script>alert('Usuário cadastrado!!.')</script>";
	}

?>