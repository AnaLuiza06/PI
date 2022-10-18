<?php
	require "../conexao/conexao.php"; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM `exercicio` WHERE `id_exercicio` = '$id'";
	$consultaDesafio = mysqli_query($cn, $sql);
	$exibe = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);
	echo json_encode($exibe);
 ?>