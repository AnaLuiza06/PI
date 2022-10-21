<?php 
	
	require ('../../conexao/conexao.php');
    session_start();

    $idUsuario = $_SESSION['ID'];
    $id_desafio = $_POST['id_desafio'];
    $idExercicio = $_POST['id_video'];
	$rendimento = $_POST['radio-rendimento'];
	$cansaco = $_POST['radio-cansaco'];
	$dores = $_POST['radio-dores'];
    $dornopeito = $_POST['radio-dornopeito'];
    $duracao = $_POST['duracao'];



 //    $consulta = mysqli_query($cn, "SELECT `duracao_desafios` FROM `desafios` WHERE `id_desafios` = '$id_desafio'");
	// $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
 //    $duracao = $exibe;

	$data = date('Y-m-d');

    $sql = "INSERT INTO `autoavaliacao`(`id_exercicio`, `id_usuario`, `data_autoavaliacao`, `rendimento_autoavaliacao`, `cansasso_autoavaliacao`, `dor_autoavaliacao`, `dornopeito_autoavaliacao`) VALUES ('$idExercicio', '$idUsuario', '$data', '$rendimento', '$cansaco', '$dores', '$dornopeito')";

        // print_r($sql);
        // echo json_encode($sql);
	 $incluir_autoavaliacao = mysqli_query($cn, $sql);
    
     $incluir_desafio = mysqli_query($cn, "INSERT INTO `registradesafio`(`id_usuario`, `id_desafio`, `id_exercicio`, `duracao_desafio`) VALUES ('$idUsuario','$id_desafio','$idExercicio','$duracao')");

    $consulta_progresso = mysqli_query($cn, "SELECT * FROM `progressodesafio`
        WHERE `id_usuario` = '$idUsuario' 
            AND `id_desafio` = '$id_desafio' 
            AND `id_video` = '$idExercicio'
        ");
    $exibe_progresso = mysqli_fetch_all($consulta_progresso, MYSQLI_ASSOC);

    $consulta_evolucao = mysqli_query($cn, "SELECT * FROM `evolucaodesafio`
        WHERE `id_usuario` = '$idUsuario' 
            AND `id_desafio` = '$id_desafio'");
    $exibe_evolucao = mysqli_fetch_all($consulta_evolucao, MYSQLI_ASSOC);

    if(count($exibe_progresso) < 1){
        $incluir_progresso = mysqli_query($cn, "INSERT INTO `progressodesafio`(`id_usuario`, `id_desafio`, `id_video`) VALUES ('$idUsuario','$id_desafio','$idExercicio')");

        if (count($exibe_evolucao) < 1) {
            $incluir_evolucao = mysqli_query($cn, "INSERT INTO `evolucaodesafio`(`id_usuario`, `id_desafio`, `finalisa_desafio`) VALUES ('$idUsuario','$id_desafio',0)");
        }

    }


?>