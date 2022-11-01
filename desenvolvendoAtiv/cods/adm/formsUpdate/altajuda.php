<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>ATIV</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../../../css/style-inicio.css">
        <link rel="stylesheet" type="text/css" href="../../../css/style-usua.css">
	    <link rel="stylesheet" type="text/css" href="../../../css/style-adm.css">
	    <link rel="stylesheet" type="text/css" href="../../../css/style-md.css">

    </head>

    <body>
        <?php
            include ('../../conexao/conexao.php');
            include ('./menu.php');
            // include menu

            $id = $_GET['cd'];
            $consulta_ajuda = mysqli_query($cn, "SELECT * FROM ajuda WHERE `id_ajuda` = '$id'");
        	$exibe_ajuda = mysqli_fetch_all($consulta_ajuda, MYSQLI_ASSOC); 
        ?>
        <section class="form-add-exercicio">
				<form method="post" action="../../conexao/updates/upajuda.php?cd=<?php echo $exibe_ajuda[0]['id_ajuda'];?>">
                    <h2>Adicionar</h2>
					<div class="input-form-cadastro">
						<label for="inputnome" id="labelnome">Pergunta</label>
						<input type="text" name="pergunta" id="inputnome" value="<?php echo $exibe_ajuda[0]['perguta_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputequipamentos">P1</label>
						<input type="text" name="p1" id="inputequipamentos" value="<?php echo $exibe_ajuda[0]['p1_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img1</label>
						<input type="text" name="img1" id="inputcontraindicacoes" value="<?php echo $exibe_ajuda[0]['img1_ajuda'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P2</label>
						<input type="text" name="p2" id="inputequipamentos" value="<?php echo $exibe_ajuda[0]['p2_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img2</label>
						<input type="text" name="img2" id="inputcontraindicacoes" value="<?php echo $exibe_ajuda[0]['img2_ajuda'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P3</label>
						<input type="text" name="p3" id="inputequipamentos" value="<?php echo $exibe_ajuda[0]['p3_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img3</label>
						<input type="text" name="img3" id="inputcontraindicacoes" value="<?php echo $exibe_ajuda[0]['img3_ajuda'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P4</label>
						<input type="text" name="p4" id="inputequipamentos" value="<?php echo $exibe_ajuda[0]['p4_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img4</label>
						<input type="text" name="img4" id="inputcontraindicacoes" value="<?php echo $exibe_ajuda[0]['img4_ajuda'];?>">
					</div>

					<div class="input-form-cadastro">
						<label for="inputequipamentos">P5</label>
						<input type="text" name="p5" id="inputequipamentos" value="<?php echo $exibe_ajuda[0]['p5_ajuda'];?>">
					</div>

                    <div class="input-form-cadastro">
						<label for="inputcontraindicacoes">Img5</label>
						<input type="text" name="img5" id="inputcontraindicacoes" value="<?php echo $exibe_ajuda[0]['img5_ajuda'];?>">
					</div>

					<button onclick="" type="submit">Enviar</button>
				</form>
		</section>
    </body>

</html>