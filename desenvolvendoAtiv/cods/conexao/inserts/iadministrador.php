<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$senha = $_POST['senha'];

	// echo $nome;
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

	 $consulta = mysqli_query($cn, "SELECT email_adm FROM adm WHERE email_adm = '$email'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 // echo count($exibe);

	if (count($exibe) >= 1) {
		//echo "usuário já cadastrado";
		echo "<script>window.location='../../adm/formsAdd/addadministrador.php?adcionado=false'</script>";
	} else{
		// echo "Usuário NÃO cadastrado";
		$sql = "INSERT INTO `adm`(`nome_adm`, `email_adm`, `nascimento_adm`, `senha_adm`) VALUES ('$nome','$email','$nascimento','$senha')";
		print_r($sql);
		$incluir = mysqli_query($cn, $sql);
		 echo "<script>window.location='../../adm/formsAdd/addadministrador.php?adcionado=true'</script>";
	}
