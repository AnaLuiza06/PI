<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$senha = $_POST['senha'];

	// echo $nome;
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

	 $consulta = mysqli_query($cn, "select email_usario from usuario where email_usario = '$email'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>window.location='../../inicio/login.php?existe=true'</script>";
	} else{
		// echo "Usuário NÃO cadastrado";
		$sql = "INSERT INTO `usuario`(`nome_usuario`, `email_usario`, `nascimento_usuario`, `altura_usuario`, `peso_usuario`, `senha_usuario`) VALUES ('$nome','$email','nascimento','$altura','$peso','$senha')";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../user/indexuser.php?form=true'</script>";
	}

?>