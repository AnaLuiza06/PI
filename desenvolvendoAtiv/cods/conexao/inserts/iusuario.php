<?php 
	
	include ('../conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$nascimento = $_POST['nascimento'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$senha = $_POST['senha'];

	//echo $nascimento;
	//echo $sobrenome."<br>";
	//echo $telefone."<br>";

	 $consulta = mysqli_query($cn, "select email_usario from usuario where email_usario = '$email'");
	 $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	 echo $consulta;

		// if (count($exibe) >= 1) {
		// 	//echo "usuário já cadastrado";
		// 	echo "<script>alert('Usuário já existente.')</script>";
		// } else{
		// 	//echo "Usuário NÃO cadastrado";

		// 	$incluir = $conn->query("insert into usuario(nome, email, nascimento, altura, peso, senha)
		// 		values('$nome', '$email', '$nascimento', '$altura', '$peso', '$senha')");
		// 	echo "<script>alert('Usuário cadastrado!!.')</script>";
		// }

?>