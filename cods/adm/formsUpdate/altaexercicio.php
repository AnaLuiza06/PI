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
            include ('./menu.php');
            // include menu

            // Acessar Dados
            $id_exercicio = $_GET['cd'];
	        $consulta = mysqli_query($cn, "SELECT * FROM exercicio WHERE id_exercicio = '$id_exercicio'");
	        $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        ?>
        <section class="form-add-exercicio">
				<form method="post" action="../../conexao/updates/upexercicio.php?cd=<?php echo $id_exercicio;?>">
                    <h2>Aletrar</h2>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Nome</label>
						<input type="text" name="nome" id="inputnome" value="<?php echo $exibe[0]['nome_exercicio'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputfoco">Foco</label>
						<input type="text" name="foco" id="inputfoco" value="<?php echo $exibe[0]['foco_exercicio'];?>">
                        
					</div>

					<div class="input-form-cadastro">
						<label for="inputdescricao">Descrição</label>
						<input type="text" name="descricao" id="inputdescricao" value="<?php echo $exibe[0]['desc_exercicio'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputduracao">Duração</label>
						<input type="time" name="duracao" id="inputduracao" value="<?php echo $exibe[0]['duracao_exercicio'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputequipamentos">Equipamentos</label>
						<input type="text" name="equipamentos" id="inputequipamentos" value="<?php echo $exibe[0]['equipamentos_exercicio'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Contra Indicações</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes" value="<?php echo $exibe[0]['contra_indicacoes_exercicio'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputvideo">Vídeo</label>
						<input type="text" name="video" id="inputvideo" value="<?php echo $exibe[0]['video_exercicio'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputimagem">Imagem</label>
						<input type="text" name="imagem" id="inputimagem" value="<?php echo $exibe[0]['imagem_exercicio'];?>">
					</div>

					<button type="submit">Enviar</button>
				</form>
		</section>
    </body>

</html>