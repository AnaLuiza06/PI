<?php 
	
	require ('../conexao.php');

    $id = $_GET['cd'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$duracao = $_POST['duracao'];
	$contraindocacoes = $_POST['contraindocacoes'];
    $imagem = $_POST['imagem'];

    $videos = $_POST['videos']; // somente os vídeos selecionados

    $alterar = mysqli_query($cn, "UPDATE `desafios` SET `nome_desafios`='$nome',`desc_desafios`='$descricao',`duracao_desafios`='$duracao',`contra_indicacoes_desafio`='$contraindocacoes',`imagem_desafio`='$imagem' WHERE `id_desafios` = '$id'");

    $consultaDesafio = mysqli_query($cn, "SELECT * FROM `videosdesafio` WHERE id_desafio = '$id'");
    $exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);

    for($i = 0; $i < count($videos); $i++){
        $exibeDesafioArray = $exibeDesafio[0];
        // print_r($exibeDesafioArray);
        $exibeDesafioId = $exibeDesafioArray['id_desafio'];

        $sql = "INSERT INTO `videosdesafio`(`id_desafio`, `id_video`) 
        VALUES ($exibeDesafioId, $videos[$i]);";
        $incluir = mysqli_query($cn, $sql);
        // print_r($sql);
    }

    for ($i = 0; $i < count($exibeDesafio); $i++ ) {
        $id_video_desafio = $exibeDesafio[$i]['id_video'];

        if(!in_array($id_video_desafio, $videos)) {
            $sql_delete = "DELETE FROM `videosdesafio` where id_video = '$id_video_desafio' and id_desafio = '$id'";
            mysqli_query($cn, $sql_delete);
        }
    }


    $sql = "SELECT * FROM `desafios` WHERE `nome_desafios` = '$nome'";

    $consulta = mysqli_query($cn, $sql);
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

	echo "<script>window.location='../../adm/formsAdd/adddesafio.php?adcionado=true'</script>";	

	//  print_r($videos[][1]);
