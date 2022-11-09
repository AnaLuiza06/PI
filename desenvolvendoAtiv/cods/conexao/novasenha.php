<?php

include('./conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$repetesenha = $_POST['repetesenha'];

print_r($email);

$consulta_user = mysqli_query($cn, "SELECT * FROM usuario WHERE email_usario = '$email'");
$exibe_user = mysqli_fetch_all($consulta_user, MYSQLI_ASSOC);

$consulta_adm = mysqli_query($cn, "SELECT * FROM adm WHERE email_adm = '$email'");
$exibe_adm = mysqli_fetch_all($consulta_adm, MYSQLI_ASSOC);

if (count($exibe_adm) > 0) {

	$novasenha = mysqli_query($cn, "UPDATE `adm` SET `senha_adm`='$senha' WHERE `email_adm` = '$email'");

	echo "<script>window.location='../inicio/login.php'</script>";
} else if (count($exibe_user) > 0) {

	$novasenha = mysqli_query($cn, "UPDATE `usuario` SET `senha_usuario`='$senha' WHERE `email_usuario` = '$email'");

	echo "<script>window.location='../inicio/login.php'</script>";
} else {
	echo "<script>window.location='../inicio/login.php?erro=true'</script>";
}
