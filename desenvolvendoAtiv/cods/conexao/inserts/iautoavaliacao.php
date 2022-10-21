<?php 
	
	require ('../conexao.php');
    session_start();

    $idUsuario = $_SESSION['ID'];

    $idExercicio = $_POST['id_video'];
	$rendimento = $_POST['radio-rendimento'];
	$cansaco = $_POST['radio-cansaco'];
	$dores = $_POST['radio-dores'];
    $dornopeito = $_POST['radio-dornopeito'];

    $data = date('Y-m-d');

	$sql = "INSERT INTO `autoavaliacao`(`id_exercicio`, `id_usuario`, `data_autoavaliacao`, `rendimento_autoavaliacao`, `cansasso_autoavaliacao`, `dor_autoavaliacao`, `dornopeito_autoavaliacao`) VALUES ('$idExercicio', '$idUsuario', '$data', '$rendimento', '$cansaco', '$dores', '$dornopeito')";
	$incluir = mysqli_query($cn, $sql);

	header('location: ../../user/videoexercicio.php?cd='.$idExercicio.'');
        

?>
