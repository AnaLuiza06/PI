<?php

require('../conexao.php');

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$duracao = $_POST['duracao'];
$contraindocacoes = $_POST['contraindocacoes'];
$imagem = $_POST['imagem'];

$videos = $_POST['videos'];

$sql = "SELECT * FROM `desafios` WHERE `nome_desafios` = '$nome'";

$consulta = mysqli_query($cn, $sql);
$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

if (!!$exibe) {
    echo "<script> alert('Usuário já existente!!.') </script>";
    header("Location: ../../adm/adddesafio.php");
} else {
    // echo "Usuário NÃO cadastrado";
    $sql = "INSERT INTO `desafios`(`nome_desafios`, `desc_desafios`, `duracao_desafios`, `contra_indicacoes_desafio`, `imagem_desafio`) VALUES ('$nome','$descricao','$duracao', '$contraindocacoes','$imagem')";
    $incluir = mysqli_query($cn, $sql);

    $sql = "SELECT * FROM `desafios` WHERE nome_desafios = '$nome'";
    $consultaDesafio = mysqli_query($cn, $sql);
    $exibeDesafio = mysqli_fetch_all($consultaDesafio, MYSQLI_ASSOC);

    for ($i = 0; $i < count($videos); $i++) {
        //print_r($videos[$i]);
        $exibeDesafioArray = $exibeDesafio[0];
        $exibeDesafioId = $exibeDesafioArray['id_desafios'];

        $sql = "INSERT INTO `videosdesafio`(`id_desafio`, `id_video`) VALUES ($exibeDesafioId, $videos[$i]);";
        $incluir = mysqli_query($cn, $sql);
        print_r($sql);
    }

    echo "<script>alert('Usuário cadastrado!!.')</script>";
}

//print_r($videos[][1]);
