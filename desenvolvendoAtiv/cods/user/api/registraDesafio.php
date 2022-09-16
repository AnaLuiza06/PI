<?php

require('../../conexao/conexao.php');
session_start();

$idUsuario = $_SESSION['ID'];
$idDesafio = $_GET['id_desafio'];

$idExercicio = $_POST['id_video'];
$rendimento = $_POST['radio-rendimento'];
$cansaco = $_POST['radio-cansaco'];
$dores = $_POST['radio-dores'];
$dornopeito = $_POST['radio-dornopeito'];


$sql = "SELECT * FROM `autoavaliacao`";

$consulta = mysqli_query($cn, $sql);
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);


$sql = "INSERT INTO `autoavaliacao`(`id_exercicio`, `id_usuario`, `rendimento_autoavaliacao`, `cansasso_autoavaliacao`, `dor_autoavaliacao`, `dornopeito_autoavaliacao`) VALUES ('$idExercicio', '$idUsuario', '$rendimento', '$cansaco', '$dores', '$dornopeito')";

$consulta = mysqli_query($cn, $sql);

$arr = [
	"success" => true,
	"message" => "Autoavaliação registrada com sucesso!"
];

echo json_encode($arr);
