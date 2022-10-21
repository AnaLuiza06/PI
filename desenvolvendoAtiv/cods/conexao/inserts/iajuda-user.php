<?php 
	
	require ('../conexao.php');

    $id_usuario = $_GET['cd'];

    $mensagem = $_POST['mensagem'];


	$sql = "INSERT INTO `duvidausuario`(`id_usuario`, `id_adm`, `mensagem_duvida`, `resposta_divida`, `data_duvida`, `status_duvida`) VALUES ('$id_usuario','','$mensagem','','01/10/2022','0')";
	$salvar = mysqli_query($cn, $sql);
    
    header("Location: ../../user/pagesMenu/ajuda.php");
?>