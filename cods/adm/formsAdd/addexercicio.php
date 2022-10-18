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
        ?>
        <section class="form-add-exercicio">
        		<?php

        			$msg = $_GET['adcionado'];

        			if($msg == 'true'){
        		?>
        			<div class="msg-add"><p>Alongamento Cadastrado</p></div>
        		<?php
        			}
        			else if($msg == 'false'){
        		?>
        			<div class="msg-add"><p>Alongamento Já Exixtente</p></div>
        		<?php
        			}
        		?>

				<form method="post" action="../../conexao/inserts/iexercicio.php">
                    <h2>Adicionar</h2>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Nome</label>
						<input type="text" name="nome" id="inputnome">
					</div>

					<div class="input-form-cadastro">
						<label for="inputfoco">Foco</label>
						<input type="text" name="foco" id="inputfoco">
                        
					</div>

					<div class="input-form-cadastro">
						<label for="inputdescricao">Descrição</label>
						<input type="text" name="descricao" id="inputdescricao">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputduracao">Duração</label>
						<input type="number" name="duracao" id="inputduracao">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputequipamentos">Equipamentos</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Contra Indicações</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputvideo">Vídeo</label>
						<input type="text" name="video" id="inputvideo">
					</div>

					<div class="input-form-cadastro">
						<label for="inputimagem">Imagem</label>
						<input type="text" name="imagem" id="inputimagem">
					</div>

					<button onclick="" type="submit">Enviar</button>
				</form>
		</section>
    </body>

</html>