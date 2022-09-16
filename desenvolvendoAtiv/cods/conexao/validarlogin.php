<?php

include('./conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

session_start();

$consulta = mysqli_query($cn, "select * from usuario where email_usario = '$email'");
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

$emailuser = $exibe[0]['email_usario'];
$senhauser = $exibe[0]['senha_usuario'];
//echo $emailuser;
//echo $senhauser;

if ($email == $emailuser and $senha == $senhauser) {
  $_SESSION['ID'] = $exibe[0]['id_usuario'];
  //echo "usuário já cadastrado";
  echo "<script>window.location='../user/indexuser.php?form=true'</script>";
} else {
  echo "<script>window.location='../inicio/login.php?erro=true'</script>";
}
