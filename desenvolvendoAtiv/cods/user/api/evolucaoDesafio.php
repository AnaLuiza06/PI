<?php 

    $id_usuario = $_SESSION['ID'];
    $consulta_evolucao = mysqli_query($cn, "SELECT * FROM `evolucaodesafio` WHERE `id_usuario` = '$id_usuario' AND `finalisa_desafio` = 0");
    $exibe_evolucao = mysqli_fetch_all($consulta_evolucao, MYSQLI_ASSOC);
    $count_evolucao = count($exibe_evolucao);
    if($count_evolucao <= 0) {
        echo "Não tem desafios iniciados";
    } else {
        for ($i=0; $i < count($exibe_evolucao); $i++) {
            $id_desafio = $exibe_evolucao[$i]['id_desafio'];
            $consulta_progresso = mysqli_query($cn, "SELECT * FROM `progressodesafio` WHERE `id_usuario` = '$id_usuario' AND `id_desafio` = '$id_desafio'");
            $exibe_progresso = mysqli_fetch_all($consulta_progresso, MYSQLI_ASSOC);

            $consulta_desafio = mysqli_query($cn, "SELECT * FROM `desafios` WHERE `id_desafios` = '$id_desafio'");
            $exibe_desafio = mysqli_fetch_all($consulta_desafio, MYSQLI_ASSOC);

            $duracao_desafio = $exibe_desafio[0]['duracao_desafios'];

            $porcentagem = round(count($exibe_progresso) / $duracao_desafio * 100);
            if($porcentagem == 100) {
                $update_evolucao = mysqli_query($cn, "UPDATE `evolucaodesafio` SET `finalisa_desafio`= 1 WHERE `id_usuario` = '$id_usuario' AND `id_desafio` = '$id_desafio'");
                continue;
            }
?>

            <div class="card-desafioatual">
                <div class="expo-geral">
                    <h3><?=  $exibe_desafio[0]['nome_desafios']?></h3>
                    <p><?=  $exibe_desafio[0]['desc_desafios']?></p>
                    <div class="evolucao">
                        <div class="container-evolucao">
                            <div style="width: <?= $porcentagem ?>%"></div>
                        </div>
                        <p><?=  $porcentagem?>%</p>
                    </div>
                </div>
                <button><a href="#">Continuar</a></button>
                <img src="<?=  $exibe_desafio[0]['imagem_desafio']?>">
            </div>
<?php

        }
    }
?>