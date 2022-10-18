<?php

	include ('./conexao.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	session_start();

	$consulta_user = mysqli_query($cn, "SELECT * FROM usuario WHERE email_usario = '$email'");
	$exibe_user = mysqli_fetch_all($consulta_user, MYSQLI_ASSOC);

	$consulta_adm = mysqli_query($cn, "SELECT * FROM adm WHERE email_adm = '$email'");
	$exibe_adm = mysqli_fetch_all($consulta_adm, MYSQLI_ASSOC);

	if(count($exibe_adm) > 0){
		if ($email == $exibe_adm[0]['email_adm'] and $senha == $exibe_adm[0]['senha_adm']) {
			$_SESSION['ID'] = $exibe_adm[0]['id_adm'];
			//echo "usuário já cadastrado";
			echo "<script>window.location='../adm/indexadm.php'</script>";
		}
		else{
			echo "<script>window.location='../inicio/login.php?erro=true'</script>";
		}
	}
	else if(count($exibe_user) > 0){
		if ($email == $exibe_user[0]['email_usario'] and $senha == $exibe_user[0]['senha_usuario']) {
			$_SESSION['ID'] = $exibe_user[0]['id_usuario'];
			//echo "usuário já cadastrado";
			echo "<script>window.location='../user/indexuser.php?form=true'</script>";
		}
		else{
			echo "<script>window.location='../inicio/login.php?erro=true'</script>";
		}
	}
	else{
		echo "<script>window.location='../inicio/login.php?erro=true'</script>";
	}

	// $emailuser = $exibe[0]['email_usario'];
	// $senhauser = $exibe[0]['senha_usuario'];
	// //echo $emailuser;
	// //echo $senhauser;

	// if ($email == $emailuser and $senha == $senhauser) {
	// 	$_SESSION['ID'] = $exibe[0]['id_usuario'];
	// 	//echo "usuário já cadastrado";
	// 	echo "<script>window.location='../user/indexuser.php?form=true'</script>";
	// }
	// else{
	// 	echo "<script>window.location='../inicio/login.php?erro=true'</script>";
	// }

?>