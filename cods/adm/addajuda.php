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
            include ('../../menu.php');
            // include menu
        ?>
        <section class="form-add-exercicio">
				<form method="post" action="../../conexao/inserts/iexercicio.php">
                    <h2>Adicionar</h2>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Pergunta</label>
						<input type="text" name="nome" id="inputnome">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputequipamentos">P1</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img1</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P2</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img2</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P3</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img3</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P4</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img4</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P5</label>
						<input type="text" name="equipamentos" id="inputequipamentos">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img5</label>
						<input type="text" name="contraindocacoes" id="inputcontraindicacoes">
					</div>

					<button onclick="" type="submit">Entrar</button>
				</form>
		</section>
    </body>

</html>