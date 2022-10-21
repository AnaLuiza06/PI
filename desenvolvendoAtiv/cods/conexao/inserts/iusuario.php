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
		header('location: ../../inicio/login.php?existe=true');
	} else{
		// echo "Usuário NÃO cadastrado";
		$sql = "INSERT INTO `usuario`(`nome_usuario`, `email_usario`, `nascimento_usuario`, `altura_usuario`, `peso_usuario`, `senha_usuario`) VALUES ('$nome','$email','nascimento','$altura','$peso','$senha')";

		$incluir = mysqli_query($cn, $sql);
		session_start();

		$consulta_id = mysqli_query($cn, "SELECT * from usuario where email_usario = '$email'");
		$exibe_id = mysqli_fetch_all($consulta_id, MYSQLI_ASSOC);
		$_SESSION['ID'] = $exibe_id[0]['id_usuario'];
		header('location: ../../user/indexuser.php?form=true?');
	}

?>