<?php
	require "../../conexao/conexao.php"; 
    session_start();
	$id_exercicio = $_GET['id'];
    $id_user = $_SESSION['ID'];
	$sql = "SELECT * FROM `favoritos` WHERE `id_exercicio` = '$id_exercicio' and `id_usuario` = '$id_user'";
	$consulta = mysqli_query($cn, $sql);
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    $resultado = [
        "success" => false,
        "message" => ""
    ];

    $favoritos = [];

    
    foreach ($exibe as $favorito) {
        $favoritos[] = intval($favorito['id_favoritos']);
    }

    if( count($exibe) ) {
        // deletar
        $id_favorito = $exibe[0]['id_favoritos'];
        $sql = "DELETE FROM  `favoritos` WHERE `id_favoritos` = '$id_favorito'";
        $consulta = mysqli_query($cn, $sql);
        $resultado = [
            "success" => true,
            "message" => "Favorito deletado"
        ];
    } else {
       
        // inserir
        $sql = "INSERT INTO `favoritos`(`id_usuario`, `id_exercicio`) VALUES ('$id_user','$id_exercicio')";
        $consulta = mysqli_query($cn, $sql);
        
        $resultado = [
            "success" => true,
            "message" => "Favorito adicionado"
        ];
    }

    echo json_encode($resultado);

 ?>