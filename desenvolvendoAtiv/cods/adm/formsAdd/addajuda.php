<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	include('../../conexao/conexao.php');
	include('./menu.php');
	// include menu
	?>
	<section class="form-add-exercicio">
		<?php

		$msg = $_GET['adcionado'];

		if ($msg == 'true') {
		?>
			<div class="msg-add">
				<p>Card Ajuda Cadastrado</p>
			</div>
		<?php
		} else if ($msg == 'false') {
		?>
			<div class="msg-add">
				<p>Card Ajuda Já Exixtente</p>
			</div>
		<?php
		}
		?>
		<form method="post" action="../../conexao/inserts/iajuda-card.php">
			<h2>Adicionar</h2>
			<div class="input-form-cadastro">
				<label for="inputnome" id="labelnome">Pergunta</label>
				<input type="text" name="pergunta" id="inputnome">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">P1</label>
				<input type="text" name="p1" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Img1</label>
				<input type="text" name="img1" id="inputcontraindicacoes">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">P2</label>
				<input type="text" name="p2" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Img2</label>
				<input type="text" name="img2" id="inputcontraindicacoes">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">P3</label>
				<input type="text" name="p3" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Img3</label>
				<input type="text" name="img3" id="inputcontraindicacoes">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">P4</label>
				<input type="text" name="p4" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Img4</label>
				<input type="text" name="img4" id="inputcontraindicacoes">
			</div>

			<div class="input-form-cadastro">
				<label for="inputequipamentos">P5</label>
				<input type="text" name="p5" id="inputequipamentos">
			</div>

			<div class="input-form-cadastro">
				<label for="inputcontraindicacoes">Img5</label>
				<input type="text" name="img5" id="inputcontraindicacoes">
			</div>

			<button onclick="" type="submit">Enviar</button>
		</form>
	</section>
</body>

</html>