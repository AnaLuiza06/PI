<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ATIV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
        <link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	    <link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">

    </head>

    <body>
        <?php
            include ('../../conexao/conexao.php');
            include ('../menu.php');
            // include menu

            // Pegando Dados do Desafio
            $id_desafio = 1;
            $consulta_desafio = mysqli_query($cn, "SELECT * FROM desafios WHERE id_desafios = '$id_desafio'");
            $exibe_desafio = mysqli_fetch_all($consulta_desafio, MYSQLI_ASSOC);
            $duracao_desafio = $exibe_desafio[0]['duracao_desafios'];
            

            // Relacionado Vídeos
            $consulta_videos = mysqli_query($cn, "SELECT * FROM videosDesafio WHERE id_desafio = '$id_desafio'");
            $exibe_videos = mysqli_fetch_all($consulta_videos, MYSQLI_ASSOC);

            // Pegando Dados Exercícios
            $consulta_exercicio = mysqli_query($cn, "SELECT * FROM exercicio");
            $exibe_exercicio = mysqli_fetch_all($consulta_exercicio, MYSQLI_ASSOC);
      ?>
        <section class="form-add">
                <h2>Adicionar</h2>
				<form class="form-desafio" method="post" action="../../conexao/inserts/idesafios.php">
                    <div>
                        <section>
                            <div class="input-form-cadastro">
                                <label for="inputnome" id="labelnome">Nome</label>
                                <input type="text" name="nome" id="inputnome" value="<?php echo $exibe_desafio[0]['nome_desafios'];?>">
                            </div>

                            <div class="input-form-cadastro">
                                <label for="inputdescricao">Descrição</label>
                                <input type="text" name="descricao" id="inputdescricao" value="<?php echo $exibe_desafio[0]['desc_desafios'];?>">
                            </div>

                            <div class="input-form-cadastro">
                                <label for="inputduracao">Duração</label>
                                <input type="number" name="duracao" id="inputduracao" value="<?php echo $exibe_desafio[0]['duracao_desafios'];?>">
                            </div>

                            <div class="input-form-cadastro">
                                <label for="inputcontraindicacoes">Contra Indicações</label>
                                <input type="text" name="contraindocacoes" id="inputcontraindicacoes" value="<?php echo $exibe_desafio[0]['contra_indicacoes_desafio'];?>">
                            </div> 

                            <div class="input-form-cadastro">
                                <label for="inputimagem">Imagem</label>
                                <input type="text" name="imagem" id="inputimagem" value="<?php echo $exibe_desafio[0]['imagem_desafio'];?>">
                            </div> 
                        </section>
                        
                        <section>

                            <div class="input-form-cadastro">
                                <label>Vídeos</label>
                                <section>

                                    <!-- <?php
                                        for($i = 0; $i < count($exibe_videos); $i++){
                                    ?>
                                        <div class='card-videos active'>
                                                <input class='card-videos-checkbox' type='checkbox' name="videos[]" value="<?= $exibe_exercicio[$i]['id_exercicio'] ?>" id="video <?= $video_selecionado['id_video'] ?>" checked>
                                                
                                            <img src="<?= $exibe_exercicio[$i]['imagem_exercicio']?>" alt=''>
                                            <div>
                                                <h5><?=$exibe_exercicio[$i]['nome_exercicio']?></h5>
                                                <p><?=$exibe_exercicio[$i]['duracao_exercicio']?></p>  
                                            </div>
                                            <div class='tipo-maisteinos'>
                                                <p><?=$exibe_exercicio[$i]['foco_exercicio']?></p>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    ?>

                                    <?php
                                        for($i = 0; $i < count($exibe_exercicio); $i++){
                                            for($f = 0; $f < count($exibe_videos); $i++){

                                                if($exibe_videos[$f][id_video] =! $exibe_exercicio[$i]['id_exercicio']){
                                    ?>
                                        <div class='card-videos'>
                                                <input class='card-videos-checkbox' type='checkbox' name="videos[]" value="<?= $exibe_exercicio[$i]['id_exercicio'] ?>" id="video <?= $video_selecionado['id_video'] ?>" checked>
                                                
                                            <img src="<?= $exibe_exercicio[$i]['imagem_exercicio']?>" alt=''>
                                            <div>
                                                <h5><?=$exibe_exercicio[$i]['nome_exercicio']?></h5>
                                                <p><?=$exibe_exercicio[$i]['duracao_exercicio']?></p>  
                                            </div>
                                            <div class='tipo-maisteinos'>
                                                <p><?=$exibe_exercicio[$i]['foco_exercicio']?></p>
                                            </div>
                                        </div>
                                    <?php
                                                }
                                            }
                                        }
                                    ?> -->
                                    <?php

                                        foreach($exibe_exercicio as &$exercicio):
                                            foreach($exibe_videos as $video_selecionado):
                                                if($exercicio['id_exercicio'] === $video_selecionado['id_video']): 
                                        
                                    ?>
                                        <div class='card-videos active'>
                                                <input class='card-videos-checkbox' type='checkbox' name="videos[]" value="<?= $exercicio['id_exercicio'] ?>" id="video <?= $video_selecionado['id_video'] ?>" checked>
                                                
                                            <img src="<?= $exercicio['imagem_exercicio']?>" alt=''>
                                            <div>
                                                <h5><?=$exercicio['nome_exercicio']?></h5>
                                                <p><?=$exercicio['duracao_exercicio']?></p>  
                                            </div>
                                            <div class='tipo-maisteinos'>
                                                <p><?=$exercicio['foco_exercicio']?></p>
                                            </div>
                                        </div>
                                        <?php 
                                            continue;
                                            else: 
                                        ?>
                                        <div class='card-videos'>
                                            <input class='card-videos-checkbox' type='checkbox' name="videos[]" value="<?= $exercicio['id_exercicio'] ?>" id="video <?= $exercicio['id_exercicio'] ?>" checked>
                                                
                                            <img src="<?= $exercicio['imagem_exercicio']?>" alt=''>
                                            <div>
                                                <h5><?=$exercicio['nome_exercicio']?></h5>
                                                <p><?=$exercicio['duracao_exercicio']?></p>  
                                            </div>
                                            <div class='tipo-maisteinos'>
                                                <p><?=$exercicio['foco_exercicio']?></p>
                                            </div>
                                        </div>
                                            <?php 
                                                    continue;
                                                endif;
                                                endforeach; 
                                            ?>
                                    <?php endforeach; ?>
                                </section>
                            </div>  
                        </section>
                    </div>
					<button onclick="" type="submit">Entrar</button>
				</form>
		</section>
        <script type="text/javascript">
            const cards = document.querySelectorAll(".input-form-cadastro .card-videos")
            function marcaCheckBox(card) {
                const input = card.querySelector('input')
                const isChecked = input.checked
                card.classList.toggle("active", !isChecked)
                input.checked = !isChecked

            }
            cards.forEach(card => {
                card.addEventListener("click", (event) => marcaCheckBox(card))

            })
        </script>
    </body>

</html>