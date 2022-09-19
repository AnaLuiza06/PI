<?php
	require "../../conexao/conexao.php"; 
    session_start();
    $id_user = $_SESSION['ID'];
	$sql = "SELECT * FROM `favoritos` WHERE `id_usuario` = '$id_user'";
    print_r($sql);
	$consulta = mysqli_query($cn, $sql);
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    json_encode($exibe);

 ?>